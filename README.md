# IXPManager-to-ARIN-IRR
Create ARIN IRR from IXP-Manager using shell scripts

These are not ready for public consumption

This will create 4 AS-Sets from the IXP Manger for each VLAN.
- IPv4 Route Server Clients
- IPv6 Route Server Clients
- All Route Server Clients
- All Participants on a VLAN

## Enties in the AS-Set IX IXP-Manager must start as either AS- or AS##### (Numeric).  Using a Route Set will break the ARIN API

You Need an ARIN API Key
- this is currenlty set in a text file

We run ours from a cron job hourly and only update ARIN if there is a change.

Modify the php foils to match your needs.
