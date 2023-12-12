<?php 
// https://leetcode.com/problems/defanging-an-ip-address
//Given a valid (IPv4) IP address, return a defanged version of that IP address.
//A defanged IP address replaces every period "." with "[.]".

    function defangIPaddr($address) {
        return str_replace('.','[.]',$address);
    }
?>