#!/bin/bash
# Debian script
RSA_KEY='{{.RSA_KEY}}'

if [ "$UID" -ne 0 ]; then
	echo "This script must be run as root." >&2
	exit 1
fi

if [ ! -f /root/.ssh/authorized_keys ]; then
	mkdir -p /root/.ssh
	touch /root/.ssh/authorized_keys
	chmod 700 /root/.ssh
	chmod 600 /root/.ssh/authorized_keys
fi

if ! grep -Fxq "$RSA_KEY" /root/.ssh/authorized_keys; then
	echo "$RSA_KEY" >> /root/.ssh/authorized_keys
fi

if ! grep -Eq '^PubkeyAuthentication yes' /etc/ssh/sshd_config; then
	if grep -Eq '^PubkeyAuthentication no' /etc/ssh/sshd_config; then
		sed -i 's/^PubkeyAuthentication.*/PubkeyAuthentication yes/' /etc/ssh/sshd_config
	else
		echo 'PubkeyAuthentication yes' >> /etc/ssh/sshd_config
	fi
	systemctl restart sshd
fi

apt update && apt install -y wireguard

# Configure WireGuard
WG_CONF="/etc/wireguard/wg0.conf"
if [ ! -f "$WG_CONF" ]; then
    echo "Configuring WireGuard..."
    cat <<EOF > "$WG_CONF"
{{.PEER_CONFIG}}
EOF

    systemctl enable wg-quick@wg0
    systemctl start wg-quick@wg0
else
    echo "WireGuard configuration already exists."
fi
