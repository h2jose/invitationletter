# invitationletter
Invitation Letter auto-generate
It allows self-generate an invitational letter for a participant to a conference or event.
## Use
Form 3 with inputs: Title, Name and institution of participant
The app receive with post method
A pdf file is generated to download
Tha app use php and composer

## Install
1. Prepare 2 images: header.png (width: 700px) and signature.png (width: 100px)
In config.php, edit this variables:
// Main manual footer items, Edit:
$president = 'Name of Event President or Director';
$position = 'Title of Event President or Director';
$institution_president = 'Name of President Institution';
$city = 'City of Event';
// Text of letter (HTML Format), Edit:
$body = 'letter content...'

It´s all.


