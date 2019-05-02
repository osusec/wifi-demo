# Infrastructure Setup

## Note
There are plaintext passwords in this file and in the Ansible files. This is not good! Don't use this for any test or production system, these VMs are isolated and only in existence for a short period of time for the demo.

## Setup Instructions
1. Setup the VMs as shown below using VBox or VMware
2. Update the host vars file with the appropriate MAC addresses
3. Run the Ansible playbook from control

## Physical Systems
 - Control System (not shown to attendee)
   - Can be virtualized if host system is running Windows (Ansible control system can't be run on Windows).
 - Attacker System
 - Victim System

Attacker VM has to be on the Attacker System, Victim VM has to be on Victim System, and the other two VMs can be on either of those systems. The Control System is not used to run VMs, only for orchestration via the wired network.

## Virtual Machines
This demo requires 4 VMs.

Base VM config:
 - Ubuntu 18.04 Server (unless otherwise notedd)
 - 30 GB disk (thin alloc is fine)
 - 2 NICs:
   1. Bridged over WiFi host NIC
      - Subnet mask: /24 (255.255.255.0)
      - Gateway IP: 172.16.10.1
   2. Bridged over wired host NIC
      - Subnet mask: /24 (255.255.255.0)
      - Gateway IP: 172.20.10.1

Specific VM configs:
 - Webserver
   - WiFi IP: 172.16.10.30
   - Wired IP: 172.20.10.30
   - Username: `webuser`
   - Password: `ultrasecure`
 - VPN Server
   - WiFi IP: 172.16.10.40
   - Wired IP: 172.20.10.40
   - Username: `vpnuser`
   - Password: `cantsniffthis`
 - Attacker
   - WiFi IP: 172.16.10.50
   - Wired IP: 172.20.10.50
   - Username: `badguy`
   - Password: `gimmedamoney`
   - USB Passthrough the Alfa NIC to this VM
 - Victm
   - Ubuntu 18.04 Desktop
   - WiFi IP: 172.16.10.60
   - Wired IP: 172.20.10.60
   - Username: `demouser`
   - Password: `ilikecookies`
