You may also do:

flash('Message')->success(); Set the flash theme to "success".
flash('Message')->error(); Set the flash theme to "danger".
flash('Message')->warning(); Set the flash theme to "warning".
flash('Message')->overlay(); Render the message as an overlay.
flash()->overlay('Modal Message', 'Modal Title'); Display a modal overlay with a title.
flash('Message')->important(); Add a close button to the flash message.
flash('Message')->error()->important(); Render a "danger" flash message that must be dismissed.


flash('Welcome Aboard!');