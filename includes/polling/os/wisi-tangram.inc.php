<?php
$wisi_data = snmp_get_multi_oid($device, ['.1.3.6.1.4.1.7465.20.2.9.1.2.1.3.1.4.7', '.1.3.6.1.4.1.7465.20.2.9.1.2.1.3.1.5.7', '.1.3.6.1.4.1.7465.20.2.9.1.2.1.3.1.2.7']);
$version      = $wisi_data['.1.3.6.1.4.1.7465.20.2.9.1.2.1.3.1.4.7'];
$serial       = $wisi_data['.1.3.6.1.4.1.7465.20.2.9.1.2.1.3.1.5.7'];
$hardware     = $wisi_data['.1.3.6.1.4.1.7465.20.2.9.1.2.1.3.1.2.7'];
