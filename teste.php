<?php

#######
# localhost pop3 with and without ssl
# $authhost="{localhost:995/pop3/ssl/novalidate-cert}";
# $authhost="{localhost:110/pop3/notls}";

# localhost imap with and without ssl
# $authhost="{localhost:993/imap/ssl/novalidate-cert}";
# $authhost="{localhost:143/imap/notls}";
# $user="localuser";

# localhost nntp with and without ssl
# you have to specify an existing group, control.cancel should exist
# $authhost="{localhost:563/nntp/ssl/novalidate-cert}control.cancel";
# $authhost="{localhost:119/nntp/notls}control.cancel";

######
# web.de pop3 without ssl
# $authhost="{pop3.web.de:110/pop3/notls}";
# $user="kay.marquardt@web.de";

#########
# goggle with pop3 or imap
 $authhost="{pop.gmail.com:995/pop3/ssl/novalidate-cert}";
 #$authhost="{imap.gmail.com:993/imap/ssl/novalidate-cert}";
# $user="username@gmail.com";

$user="eduardo@webgenium.com.br";
$pass="siste1853";

if ($mbox=imap_open( $authhost, $user, $pass ))
        {
         echo "<h1>Connected</h1>\n";
         imap_close($mbox);
        } else
        {
         echo "<h1>FAIL!</h1>\n";
        }