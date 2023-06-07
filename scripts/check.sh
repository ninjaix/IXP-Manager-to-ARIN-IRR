# version 1
# replace api jey with your arin -api key
# replacy your the org id as well
#!/bin/bash
cd output
FILES="AS-*"
for f in $FILES
do
  if ! cmp $f active/$f >/dev/null 2>&1
   then
    echo "$f  has changed"
    cp $f active/$f
#-delete old IRR
    echo " "
    echo " Deleteing . . . ipv4/ipv6"
    curl -X DELETE  --header 'Accept: application/xml' https://reg.arin.net/rest/irr/as-set/$f?apikey=API-XXXX-XXXX-XXXX-XXXX&orgHandle=XXX-XXXX
    sleep 1
#-add new IRR
    echo " "
    echo "Adding . . . ipv4/ipv6"
    curl  -X POST --header 'Content-Type: application/xml' --header 'Accept: application/xml' -d @$f 'https://reg.arin.net/rest/irr/as-set?apikey=API-XXXX-XXXX-XXXX-XXXX&orgHandle=XXX-XXXX'
    sleep 1
#
    echo " "
  fi
done
cd ..
