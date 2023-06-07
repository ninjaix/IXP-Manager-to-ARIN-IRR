<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<asSet
  xmlns="http://www.arin.net/regrws/core/v1">
  <description>
    <line number="0">IPv<?=$scrproto?> Route Server Participants at NINJA-IX-<?=$scrmarket ?></line>
  </description>
  <orgHandle>PC-369</orgHandle>
  <remarks>
    <line number="0">This is automatically generated hourly around 22 minutes past as needed from our</line>
    <line number="1">IXP Manager Platform.</line>
    <line number="2">Contact IRR at NINJA-IX d0t NET if there is an issue and a ticket will be created.</line>
  </remarks>
  <source>ARIN</source>
  <members>
<?php foreach( $t->rsclients[ "clients" ] as $asn => $cdetails ): ?>
<?php $cust = $t->customers[ $cdetails[ "id" ] ] ?>
<?php foreach( $cdetails[ "vlans" ] as $vlanid => $vli ): ?>
<?php foreach( $vli as $vliid => $interface ): ?>
<?php foreach( $t->protocols as $proto ): ?>
<?php if( !isset( $interface[ $proto ] ) ): ?>
<?php continue; ?>
<?php endif; ?>
<?php if( $vlanid == $scrvlan ): ?>
<?php if( strpos($cust->peeringmacro, ':RS') === false ): ?>
<?php if( str_starts_with($cust->peeringmacro, 'AS') ) : ?>
<?php if( $proto == $scrproto ): ?>
<?php if( $scrproto == 6): ?>
<?php if( is_null($cust->peeringmacrov6) ): ?>
    <member name="<?= $cust->peeringmacro ?>"/>
<?php else: ?>
    <member name="<?= $cust->peeringmacrov6 ?>"/>
<?php endif; ?>
<?php else: ?>
    <member name="<?= $cust->peeringmacro ?>"/>
<?php endif; ?>
<?php else: ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>
<?php endforeach; ?>
<?php endforeach; ?>
<?php endforeach; ?>
  </members>
  <name>AS-NINJA-IX-<?=$scrmarket ?>-IPV<?=$scrproto?></name>
</asSet>
