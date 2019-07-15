#LAN Chat
A small web based chat application intended for use on a local area network.
Very simple, thrown together to chat with the GF who was in the warm room, while 
I code away in the miserable cold and dimly lit chamber which is ideal for programming.

Can send html and css through chat which is lots of fun, and while you can cause a server
error by choosing a particularly malicious name unfortunately PDO won't allow multiple
statements to run (it's actually a good thing), so user "'; drop table chat_log; --" can't
have too much fun.
###Prerequisites
Firebird DB and PHP

###How to use
DB connection setting (and credentials) are currently hardcoded in PHP so read the code to
see how it connects. TODO: add more helpful instructions!
