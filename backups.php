<?php
$titles= [  'Backup',
            'Some common types of backups include',
            'Full Backups',
            'Incremental backups',
            'Differential backups',
            'Mirror backups',
            'Onsite',
            'Offsite',
            'Cloud',
            'Onsite backup',
            'Offsite backup',
            'Online backup',
            'back to the top'];

$intro = [  'A backup is a copy of data that can be used to restore the original data in the event that it is lost or damaged.
            Backups are important because they allow you to recover from data loss due to accidents, hardware failures, software corruption, or other causes.
            There are many different approaches to backing up data, and the best approach will depend on your specific needs and resources.',

            'full'=>'These backups include a complete copy of all data. Full backups can be time-consuming to create and restore, but they provide a complete record of all data and are useful for disaster recovery.',

            'incremental'=>'These backups only include changes made since the last backup. Incremental backups are faster to create and restore than full backups, but they may not provide as much protection in the event of a disaster.',

            'differential'=>'These backups include all changes made since the last full backup. Differential backups are similar to incremental backups in that they only include changes, but they provide more protection than incremental backups because they include all changes made since the last full backup.',

            'mirror'=>'These backups create an exact copy of the data being backed up. Mirror backups are useful for quickly restoring data, but they may not be as comprehensive as other types of backups.',

            'outro'=>'It is generally recommended to create backups on a regular basis and to store them in a secure location, such as an external hard drive or a cloud-based storage service. This will ensure that you have access to your data in case of an emergency.',

            'onsite'=>['backup is easy to set up, data convenient to access and no Internet connection is required  backup or restore data.',

                        'Storing data on a physical media, now days portable hard drives and flash drives are the most common ways to backup data.
                        say, you had 2 hard rives on your computer, one can be your main hard drive and the other can be your backup, if your hard drive were to fail,
                        then all there is to do is to restore the data onto a new hard drive from the backup. and this way the downtime you will experience will be minimum
                        the last example was a worst case scenario, hard drives are smart enough to tell the computer when they have errors and that they might fail.'],

            'offsite'=>['backup is essentially saving the data on a memory drive or other device,
                        and taking the device to a different place away from the primary location.',

                        'Storing data on a physical media, now days portable hard drives and flash drives are the most common ways to backup data.
                        say, you had 2 hard drives on your computer, and the information is so important that one backup is not enough, because all of the data is in one place
                        there is a risk of losing the data and the backup at the same time, one can prevent this by taking the backup away from the building
                        to make it more secure in case of a disaster that can take your main data with it. the advantage of the off-site backup is that one can
                        restore the data onto a new computer from the off-site backup. and this way the downtime you will experience will be minimum.
                        the last example was a worst case scenario, h-drives are smart enough to tell the computer when they have errors and that they might fail, and to keep in mind that a replacement drive will be needed.'],

            'cloud'=>['backup requires an Internet connection to access cloud space
                        where data is stored, it\'s simple, and data can be accessed from anywhere.',

                        'Storing data on the internet, that way if you were to need a file, you can simply log in and retrieve the file from your online backup account.
                        there are services that backup your data automatically online, most of the free ones have limited space and capabilities.']
        ];
?>