# Invitation Letter Auto-Generate
Invitation Letter auto-generate<br/>
It allows self-generate an invitational letter for a participant to a conference or event.<br/>
## Resume
Form with 3 inputs: Title, Name and institution of participant<br/>
The app work with post method<br/>
A pdf file is generated with DOMPDF to download<br/>
Tha app use php and composer<br/>

## Install
1. Prepare 2 images: header.png (width: 700px) and signature.png (width: 100px)<br/>
2. In config.php, edit this variables:<br/>
// Main manual footer items, Edit:<br/>
$president = 'Name of Event President or Director';<br/>
$position = 'Title of Event President or Director';<br/>
$institution_president = 'Name of President Institution';<br/>
$city = 'City of Event';<br/>
// Text of letter (HTML Format), Edit:<br/>
$body = 'letter content...'<br/>
<br/>
3. It´s all.


