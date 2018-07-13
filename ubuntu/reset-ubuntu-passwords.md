# Step 1:
Switch on your computer.
Wait until the UEFI/BIOS has finished loading, or has almost finished. (During this time you will probably see a logo of your computer manufacturer.) Note: UEFI fast boot may be to fast to give time to press any key.
With BIOS, quickly press and hold the Shift key, which will bring up the GNU GRUB menu. (If you see the Ubuntu logo, you've missed the point where you can enter the GRUB menu.) With UEFI press (perhaps several times) the Escape key to get grub menu.
Select the line which starts with "Advanced options".

Select the line ending with "(recovery mode)", probably the second line, something like:

Ubuntu GNU/Linux, with Linux 3.8.0-26-generic (recovery mode)
Press Return and your machine will begin the boot process.
After a few moments, your workstation should display a menu with a number of options. One of the options (you may need to scroll down to the bottom of the list) will be "Drop to root shell prompt". Press Return with this option highlighted.

The root partition is mounted read-only. To mount it read/write, enter the command

mount -o remount,rw /
If you have /home, /boot, /tmp, or any other mount point on a separate partition, you can mount them with the command

mount --all

# Step 2

root@ubuntu:~# passwd jorge
Enter new UNIX password:
Retype new UNIX password:
passwd: password updated successfully
root@ubuntu:~#
