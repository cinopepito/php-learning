what is an array?
Array is a method, we use in php to store data in order to reuse them later.

what is associative array?
Associative array is made with element of the array and key to access information about data;
it's like a way to get inside a house, to be able to get inside a room, you need a key,each key open one door so you better use the appropriate key.

To handle error reporting in our working directorey, we can prevent our site to give back error to prevent people who visit our site to know the vulnerabilities of our site, to do that, we go to php.ini and we search error reporting. Then, we give value 0 to the error reporting part so that user can not have access to error reporting on the site. we stop our local server and we restart it to make changes to work.
if we want to bring error report back, we just need to say error_reporting = E-All and the error is printed back

we use the inbuilt function die() and exit to kill the rest of the script. we use this function to prevent the rest of the script to get executed.
