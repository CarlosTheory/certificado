# certificado
diploma generator for an assignment class using js, jquery, ajax and php, also using FileSaver.js library 


This Project is for an event at college, The main thing to do is Generate a Diploma or a Digital Certification
printing text over the image model.

This is possible with JS

1. User form to getting data,the data that I am using is 'nombre', 'apellido' and 'cedula' wich is the sane as 'name',
'lastname' and 'id'. The other values are passing through Jquery/Ajax via POST to a bd.

2. I created the canvas with html5 and set the width and height too, also under canvas I put and img tag, containing
the background image for the certificate wich is also the same size.

3. Then I validate the data to be printed into the canvas, get the elements using an array wich the id of the form

4. Draw the image with js using drawImage. if you try to put it via css is not going to work. The result is gonna be
only the text.

5. Set the text getting the fields with the data user and then us toBlob function with Filesaver.js

PD: The PHP thing was an extra to getting the user contact information to communicate anything about the event
so... I'm not going to explain it, also I'm very lazy.
