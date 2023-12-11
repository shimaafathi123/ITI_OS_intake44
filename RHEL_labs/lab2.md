# 1. Create a user account with the following attribute
  - username: islam
  - Fullname/comment: Islam Askar
  - Password: islam
    
![Screenshot from 2023-12-11 20-41-43](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/6465f9b3-c07d-444a-82ef-e2676f38f86e)

# 2. Create a user account with the following attribute
- Username: baduser
- Full name/comment: Bad User
- Password: baduser

![Screenshot from 2023-12-11 20-44-02](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/61e7b341-29b9-4835-9c97-ac2e3f33207c)

# 3. Create a supplementary (Secondary) group called pgroup with group ID of 30000

![Screenshot from 2023-12-11 20-47-09](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/0e145b7f-6ba3-41da-89c5-8c8959e37ffa)

# 4. Create a supplementary group called badgroup

![Screenshot from 2023-12-11 20-48-04](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/e6dd135f-8449-49f7-8eb2-3d791769504f)

# 5. Add islam user to the pgroup group as a supplementary group

![Screenshot from 2023-12-11 20-54-49](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/4293909a-53e0-4675-bd1c-aec91db34bd3)

# 6. Modify the password of islam's account to password

![Screenshot from 2023-12-11 20-56-30](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/08b8822f-e56a-44af-8f9f-4518875d3eb9)

# 7. Modify islam's account so the password expires after 30 days

![Screenshot from 2023-12-11 22-40-09](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/9a4c7254-73fd-41f6-8d14-acf5ca7a4942)

![Screenshot from 2023-12-11 22-41-18](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/8b6f4bef-0464-4cae-95d7-721b7faaf161)

# 8. Lock bad user account so he can't log in

![Screenshot from 2023-12-11 22-42-02](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/f334bdd6-804a-4253-b046-9846a205f699)

# 9. Delete bad user account

![Screenshot from 2023-12-11 22-43-46](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/893f379c-e13c-42ef-9c09-6062b00c9327)

# 10. Delete the supplementary group called badgroup.

![Screenshot from 2023-12-11 22-44-17](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/aad335d2-ba09-425d-a376-e6dd6a00ab6a)

# 11. Create a folder called myteam in your home directory and change its permissions to read only for the owner.

![Screenshot from 2023-12-11 22-46-03](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/e4bcb787-a74d-481f-a979-b1d89a29677c)


# 12. Log out and log in by another user

![Screenshot from 2023-12-11 22-47-39](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/3c32c6ff-a32b-4607-bd7e-99b305b0f43b)


# 13. Try to access (by cd command) the folder (myteam)

![Screenshot from 2023-12-11 22-48-50](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/7a3468ae-3c10-44f6-bd16-19b3f4fb2fdf)

# 14. Using the command Line
- Change the permissions of oldpasswd file to give owner read and write permissions and for group write and execute and execute      only for the others (using chmod in 2 different ways)
  
  1)![Screenshot from 2023-12-11 22-53-50](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/132c9d2e-12d9-4a19-ade7-7421bb8f9ee2)

  2) 
![Screenshot from 2023-12-11 22-58-20](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/d554e1ad-3d97-412b-8c2c-838e7998de9b)

  
- Change your default permissions to be as above.

  ![Screenshot from 2023-12-11 23-02-13](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/492da913-e4ba-4d97-bd13-032ddc083cf3)

- What is the maximum permission a file can have, by default when it is just created? And what is that for directory.

  *umask 002: that other can't excute files or direcotries*
  
- Change your default permissions to be no permission to everyone then create a directory and a file to verify.

![Screenshot from 2023-12-11 23-08-29](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/6bde511e-5573-44cc-b238-19c2c2cb82f9)


# 15. What are the minimum permission needed for:
- Copy a directory (permission for source directory and permissions for target parent directory)
  
  *source: r-x*

  *target: w*

  
- Copy a file (permission for source file and and permission for target parent directory)

    *source: r*

    *target: w*

  
- Delete a file

    *w-x*

  
- Change to a directory

    *x*

  
- List a directory content (ls command)

  *r-x*

  
- View a file content (more/cat command)

  *r*
  
- Modify a file content

   *w*
  
# 16. Create a file with permission 444. Try to edit in it and to remove it? Note what happened.


![Screenshot from 2023-12-11 23-20-29](https://github.com/shimaafathi123/ITI_OS_intake44/assets/93112282/3675f04b-90fe-45f5-9962-4f7a92b9eaa2)

# 17. What is the difference between the “x” permission for a file and for a directory?

*the execute permission allows the file to be executed as a program or script*


*Without execute permission on a directory, a user cannot enter the directory or perform any operations inside it, even if they have read permission on the directory, Allows accessing and traversing the directory.*




