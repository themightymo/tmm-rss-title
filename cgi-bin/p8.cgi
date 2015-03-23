#!/usr/bin/perl


if ($ENV{'REQUEST_METHOD'} eq 'GET') {

	@pairs = split(/&/, $ENV{'QUERY_STRING'});


} elsif ($ENV{'REQUEST_METHOD'} eq 'POST') {

	read (STDIN, $buffer, $ENV{'CONTENT_LENGTH'});
	@pairs = split(/&/, $buffer);


	if ($ENV{'QUERY_STRING'}) {
		@getpairs =split(/&/, $ENV{'QUERY_STRING'});
		push(@pairs,@getpairs);

		}

} else {


	print "Content-type: text/html\n\n";

	print "<P>Use Post or Get";

}

foreach $pair (@pairs) {

	($key, $value) = split (/=/, $pair);

	$key =~ tr/+/ /;

	$key =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;

	$value =~ tr/+/ /;

	$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;


	$value =~s/<!--(.|\n)*-->//g;

	if ($formdata{$key}) {

		$formdata{$key} .= ", $value";

	} else {

		$formdata{$key} = $value;

	}

}


print "Content-type: text/html\n\n";

print "<HTML><HEAD><TITLE></TITLE>";



$count_file = "/home/manage/public_html/template/header.html";
if (open (FILE, "<" . $count_file)) {

	@temp = <FILE>;
	print "@temp";
		close (FILE);
} else {
		print "[ Sorry! Can't read from the data file ]", "\n";
}




print "</HEAD><BODY>";

$count1_file = "/home/manage/public_html/template/top-left-a.html";
if (open (FILE1, "<" . $count1_file)) {
	@temp = <FILE1>;
	print "@temp";
		close (FILE1);
} else {
		print "[ Sorry! Can't read from the data file 1]", "\n";
}

$count1_file = "/home/manage/public_html/template/top-left-b.html";
if (open (FILE2, "<" . $count1_file)) {
	@temp = <FILE2>;
	print "@temp";
		close (FILE2);
} else {
		print "[ Sorry! Can't read from the data file 2]", "\n";
}



print <<"Code V";
<H1>Processing Email Form &nbsp; <img src="/images/processing.gif" height="18" width="115" border="0" alt="Processing Email Form"></H1>
<HR>
<!-- PageBody -->


Code V

sub ErrorMessage {
  print "<P>The server was not able to process your request.  Please email us directly to report the problem. We apologize for any inconvenience this may cause.";
  print "</font></td></tr></table></body></html>";
  exit;
}


($sec,$min,$hour,$mday,$mon,$year,$wday,$yday,$isdst)=localtime(time);

$mon = $mon+1;
$year = $year+1900;
$url = $formdata{'getURL'};
$resourcewebsite = $formdata{'resourcewebsite'};
$resourcetitle = $formdata{'resourcetitle'};
$topic = $formdata{'topic'};
$required_email = $formdata{'required_contact'};
$required_echeck = $formdata{'required_echeck'};
$hcheck = $formdata{'hcheck'};
$Method = $formdata{'Method'};
$resourcedesc = $formdata{'resourcedesc'};
while ($resourcedesc =~ /\s$/) {
  chop($resourcedesc);
}
$resourcedesc =~ s/'//g;

$likedesc = $formdata{'likedesc'};
while ($likedesc =~ /\s$/) {
  chop($likedesc);
}
$likedesc =~ s/'//g;

$abusedesc = $formdata{'abusedesc'};
while ($abusedesc =~ /\s$/) {
  chop($abusedesc);
}
$abusedesc =~ s/'//g;

$helpdesc = $formdata{'helpdesc'};
while ($helpdesc =~ /\s$/) {
  chop($helpdesc);
}
$helpdesc =~ s/'//g;

$improvedesc = $formdata{'improvedesc'};
while ($improvedesc =~ /\s$/) {
  chop($improvedesc);
}
$improvedesc =~ s/'//g;

$expectdesc = $formdata{'expectdesc'};
while ($expectdesc =~ /\s$/) {
  chop($expectdesc);
}
$expectdesc =~ s/'//g;

$feedback = $formdata{'feedback'};
while ($feedback =~ /\s$/) {
  chop($feedback);
}
$feedback =~ s/'//g;

if (($required_echeck eq "r83k!fd023kdkfd92354kb0pg39") && ($hcheck eq "")) {

if ($Method eq "Form to add content") {
open(EMAILS, ">>index.txt") || &ErrorMessage;
flock (EMAILS, 2);
print EMAILS "$mon/$mday/$year|$Method|$required_email|$url|$resourcewebsite|$resourcetitle|$topic|$resourcedesc||\n";
flock (EMAILS, 8);
close (EMAILS);

open(MAIL, "|/usr/sbin/sendmail -t") || $ErrorMessage;
print MAIL "To: carter\@authenticityconsulting.com \nCc: teri\@authenticityconsulting.com \nFrom: $required_email\n";
print MAIL "Subject: $Method\n";
print MAIL "Date: $mon/$mday/$year \nForm Name: $Method \nEmail: $required_email \nURL: $url \nResource Website: $resourcewebsite \nResource Title: $resourcetitle \nTopic: $topic \nResource Description: $resourcedesc\n";
close(MAIL);
}

if ($Method eq "Form to provide feedback") {
open(EMAILS, ">>index.txt") || &ErrorMessage;
flock (EMAILS, 2);
print EMAILS "$mon/$mday/$year|$Method|$required_email|$url||||||$expectdesc\n";
flock (EMAILS, 8);
close (EMAILS);

open(MAIL, "|/usr/sbin/sendmail -t") || $ErrorMessage;
print MAIL "To: carter\@authenticityconsulting.com \nCc: teri\@authenticityconsulting.com \nFrom: $required_email\n";
print MAIL "Subject: $Method\n";
print MAIL "Date: $mon/$mday/$year \nForm Name: $Method \nEmail: $required_email \nURL: $url \nExpected Description: $expectdesc\n";
close(MAIL);
}

if ($Method eq "Form to report abuse") {
open(EMAILS, ">>index.txt") || &ErrorMessage;
flock (EMAILS, 2);
print EMAILS "$mon/$mday/$year|$Method|$required_email|$url|$resourcewebsite|||$abusedesc||\n";
flock (EMAILS, 8);
close (EMAILS);

open(MAIL, "|/usr/sbin/sendmail -t") || $ErrorMessage;
print MAIL "To: carter\@authenticityconsulting.com \nCc: teri\@authenticityconsulting.com \nFrom: $required_email\n";
print MAIL "Subject: $Method\n";
print MAIL "Date: $mon/$mday/$year \nForm Name: $Method \nEmail: $required_email \nURL: $url \nResource Website: $resourcewebsite \nAbuse Description: $abusedesc\n";
close(MAIL);
}

if ($Method eq "Form to report broken links") {
open(EMAILS, ">>index.txt") || &ErrorMessage;
flock (EMAILS, 2);
print EMAILS "$mon/$mday/$year|$Method|$required_email|$url|$resourcewebsite|||||\n";
flock (EMAILS, 8);
close (EMAILS);

open(MAIL, "|/usr/sbin/sendmail -t") || $ErrorMessage;
print MAIL "To: carter\@authenticityconsulting.com \nCc: teri\@authenticityconsulting.com \nFrom: $required_email\n";
print MAIL "Subject: $Method\n";
print MAIL "Date: $mon/$mday/$year \nForm Name: $Method \nEmail: $required_email \nURL: $url \nResource Website: $resourcewebsite \n";
close(MAIL);
}

if ($Method eq "Form to request help") {
open(EMAILS, ">>index.txt") || &ErrorMessage;
flock (EMAILS, 2);
print EMAILS "$mon/$mday/$year|$Method|$required_email|$url||||$helpdesc|$expectdesc|\n";
flock (EMAILS, 8);
close (EMAILS);

open(MAIL, "|/usr/sbin/sendmail -t") || $ErrorMessage;
print MAIL "To: carter\@authenticityconsulting.com \nCc: teri\@authenticityconsulting.com \nFrom: $required_email\n";
print MAIL "Subject: $Method\n";
print MAIL "Date: $mon/$mday/$year \nForm Name: $Method \nEmail: $required_email \nURL: $url \nExpected Description: $expectdesc \nHelp Description: $helpdesc\n";
close(MAIL);
}


if (($Method eq "Form to report abuse")) {
  print "We greatly appreciate your informing us of inappropriate content in the Library!";
  print "<center><form name='reportabuse' method='get' action='/email/reportabuse2.htm'><input type='submit' value='Submit Form'></form></center>";
  print"<script language='JavaScript'>setTimeout('document.reportabuse.submit()',2000) </script>";
}

if (($Method eq "Form to report broken links")) {
  print "We greatly appreciate your reporting broken links to us!";
  print "<center><form name='brokenlinks' method='get' action='/email/brokenlinks2.htm'><input type='submit' value='Submit Form'></form></center>";
  print"<script language='JavaScript'>setTimeout('document.brokenlinks.submit()',2000) </script>";
}


if (($Method eq "Form to provide feedback")) {
  print "We greatly appreciate your informing us about your experience in using the Library!";
  print "<center><form name='providefeedback' method='get' action='/email/providefeedback2.htm'><input type='submit' value='Submit Form'></form></center>";
  print"<script language='JavaScript'>setTimeout('document.providefeedback.submit()',2000) </script>";
}


if (($Method eq "Form to request help")) {
  print "Thank you for your inquiry. The Library is managed by a group of part-time volunteer administrators. Thus, response time to your requests for help might take up to a few days.";
  print "<center><form name='requesthelp' method='get' action='/email/requesthelp2.htm'><input type='submit' value='Submit Form'></form></center>";
  print"<script language='JavaScript'>setTimeout('document.requesthelp.submit()',2000) </script>";
}

if (($Method eq "Form to add content")) {
  print "We greatly appreciate your suggesting links to free resources to include in the Library!";
  print "<center><form name='addcontent' method='get' action='/email/addcontent2.htm'><input type='submit' value=''></form></center>";
  print"<script language='JavaScript'>setTimeout('document.addcontent.submit()',2000) </script>";
}

} else {
    print "Sorry! This field contains an error.", "\n";
}




$count2_file = "/home/manage/public_html/template/bottom-right.html";
if (open (FILE2, "<" . $count2_file)) {
	@temp = <FILE2>;
	print "@temp";
		close (FILE2);
} else {
		print "[ Sorry! Can't read from the data file 2 ]", "\n";
}



print "</BODY></HTML>";
