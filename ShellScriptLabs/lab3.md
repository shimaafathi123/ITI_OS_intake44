# 1. Write a script called mycase, using the case utility to checks the type of character

# entered by a user:
# a. Upper Case.
# b. Lower Case.
# c. Number.
# d. Nothing.

#!/bin/bash
read -p "Enter a character: " char
case $char in
    [A-Z])
        echo "Upper Case."
        ;;
    [a-z])
        echo "Lower Case."
        ;;
    [0-9])
        echo "Number."
        ;;
    *)
        echo "Nothing."
        ;;
esac

# 3. Enhanced the previous script, by checking the type of string entered by a user:
# a. Upper Cases.
# b. Lower Cases.
# c. Numbers.
# d. Mix.
# e. Nothing.
#!/bin/bash

# Prompt the user to enter a string
read -p "Enter a string: " input_string

# Use the case statement to check the type of string
case $input_string in
    [A-Z]*)
        echo "Upper Cases."
        ;;
    [a-z]*)
        echo "Lower Cases."
        ;;
    [0-9]*)
        echo "Numbers."
        ;;
    *[a-zA-Z0-9]*)
        echo "Mix."
        ;;
    *)
        echo "Nothing."
        ;;
esac

5. Write a script called mychmod using for utility to give execute permission to all files and
directories in your home directory.
6. Write a script called mybackup using for utility to create a backup of only files in your
home directory.
7. Write a script called mymail using for utility to send a mail to all users in the system.
Note: write the mail body in a file called mtemplate.
8. Write a script called chkmail to check for new mails every 10 seconds. Note: mails are
saved in /var/mail/username.
