<?php
/**
 * Created by PhpStorm.
 * User: Biswajit
 * Date: 10/8/2015
 * Time: 1:34 AM
 */

/**
 * Domain Name System (DNS)
 *
 * DNS Lookup Functions
 *
 * Name                   Description
 * gethostbyname()        Gets IP address corresponding to the hostname
 * gethostbynamel()       Gets list of IP addresses corresponding to the hostname
 * gethostbyaddr()        Gets hostname corresponding to an IP address
 * getmxrr()              Fetches the mail exchange (MX) record associated with a hostname
 * dns_get_mx()           Alias for getmxrr()
 * checkdnsrr()           Checks for the existence of DNS records for a hostname
 * dns_check_record()     Alias for checkdnsrr()
 * dns_get_record()       Fetches DNS records associated with a hostname
 */

$ip = gethostbyname("www.example.com");
echo "IP = $ip\n";
$host = gethostbyaddr("192.0.34.166");
echo "Host = $host\n";
$ip = gethostbynamel("yahoo.com");
print_r($ip);

/**
 * DNS Record Types and Their Meanings
 * A           Address code, used for storing an IP address associated with the domain
 * MX          Mail exchange, the domain name used for sending and receiving mail
 * NS          The authoritative name server
 * SOA         Start of Authority
 * PTR         Domain name pointer
 * CNAME       Canonical name for a DNS alias
 * AAAA        Address code used for IPv6 Addresses
 * ANY         Any of the above
 * TXT
 */

/**
 * Using the dns_check_record() Function
 */
$hostname = "google.com";

if(dns_check_record($hostname, "NS")) { echo "An authoritative name server exists.\n";}
else { echo "No name server was found for this domain\n";}

/**
 * Fetches DNS records associated with a hostname
 */
$record = dns_get_record("php.net");
print_r($record);


//$hostname = "google.com";
//
//$records = dns_get_record($hostname, DNS_ALL);
//
//echo "The domain $hostname has the following DNS records: ";
//
//foreach($records as $record) {
//
//    echo "{$record['type']} ";
//
//}
