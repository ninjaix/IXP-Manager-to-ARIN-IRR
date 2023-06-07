<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<asSet
  xmlns="http://www.arin.net/regrws/core/v1">
  <description>
    <line number="0">All Participants at NINJA-IX-<?=$scrmarket ?></line>
  </description>
  <orgHandle>PC-369</orgHandle>
  <remarks>
    <line number="0">This is automatically generated hourly around 22 minutes past as needed from our</line>
    <line number="1">IXP Manager Platform.</line>
    <line number="2"></line>
    <line number="3">Contact IRR at NINJA-IX d0t NET if there is an issue and a ticket will be created.</line>
    <line number="4"></line>
    <line number="5">There are seperate AS Sets for the Route Server IPv4, IPv6 and Merged v4-v6 files available as well.</line>
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
<?php if( str_starts_with($cust->peeringmacro, 'AS') ): ?>
<?php if( is_null($cust->peeringmacrov6) ): ?>
<?php else: ?>
    <member name="<?= $cust->peeringmacrov6 ?>"/>
<?php endif; ?>
    <member name="<?= $cust->peeringmacro ?>"/>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>
<?php endforeach; ?>
<?php endforeach; ?>
<?php endforeach; ?>
  </members>
  <name>AS-NINJA-IX-<?=$scrmarket ?>-ALL</name>
</asSet>
