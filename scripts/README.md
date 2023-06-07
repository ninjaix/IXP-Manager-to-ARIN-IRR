# info
We deploy as follows on our ubuntu server running IXPManager
### We run everything from our skins directory
- /srv/ixpmanager/resources/skins/ninja/api/v4/rir/templates 
- and place all scripts there
### We make an subdierectory of output and output/active
- move check.sh there
- make the edits as needed

### create a cronjob
21 * * * *  /bin/bash /srv/ixpmanager/resources/skins/ninja/api/v4/rir/templates/do-all.sh > arin.log
@reboot /bin/bash /srv/ixpmanager/resources/skins/ninja/api/v4/rir/templates/do-all.sh > arin.log
