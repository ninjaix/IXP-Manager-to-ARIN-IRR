# version 1 
# change to your skin directory
#  Phoenix is the name of our Infrastructure
#  Richmond is another Infrastucture within the same IXP-Manager 
#  1 or 8 is the id from IXP Manager
#  4/6 is the protocol -  it is only used on the generation of the v4 and v6 and not the rs or all
#
######################################################################################################
#!/bin/bash
cd /srv/ixpmanager/resources/skins/ninja/api/v4/rir/templates
#
sh as-sets Phoenix 1 4
sh as-sets Phoenix 1 6
sh as-sets-rs Phoenix 1 4
sh as-sets-all Phoenix 1 4
#
sh as-sets Richmond 8 4
sh as-sets Richmond 8 6
sh as-sets-rs Richmond 8 4
sh as-sets-all Richmond 8 4
#
echo "IRR Generation Completed"
#
bash /srv/ixpmanager/resources/skins/ninja/api/v4/rir/templates/output/check.sh
#
echo "Arin Changes Done"
#
ls -l
