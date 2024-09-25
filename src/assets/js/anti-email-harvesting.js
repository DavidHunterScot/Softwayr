var email_addresses = document.getElementsByClassName( 'email-address' );

for( var e = 0; e < email_addresses.length; e++ )
{
    var email_address_element = email_addresses.item( e );
    var email_address = email_address_element.innerHTML;

    email_address = email_address.replace( ' [at] ', '@' ).replace( ' [dot] ', '.' );

    email_address_element.innerHTML = '<a href="mailto:' + email_address + '" target="_blank">' + email_address + '</a>';
}
