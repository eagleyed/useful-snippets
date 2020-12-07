echo Str::limit('Hello world! Today is a new begining.', 15);
/*
Output: "Hello world! To ..."
*/

## With custom ending ##
echo Str::limit('Hello world! Today is a new begining.', 15, ' -->');
/*
Output: "Hello world! To -->"
*/

echo Str::words('Hello world! Today is a new begining.', 2);
/*
Output: "Hello world! ..."
*/

## With custom ending ##
echo Str::words('Hello world! Today is a new begining.', 2, ' -->');
/*
Output: "Hello world! -->"
*/
