#!/bin/sh
if [ "$#" -ne 1 ]; then
	echo "usage: $0 [inventory file]"
	exit 1
fi

ansible-playbook -i "$1" -c paramiko site.yml
