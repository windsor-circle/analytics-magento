Installing Extension
--------------------------------------------------

Windsor Circle Analytics is distributed as a Magento Connect `tgz` file.  This means there's two ways to install it.

- By uploading the `tgz` extension via the Magento Connect Manager

- By copying the extension source manually to your Magento system.

## Uploading the Extension

- Download the extension from the [releases page](https://github.com/windsor-circle/analytics-magento/releases)

- Log into your Magento Admin console

- Browse to `System -> Magento Connect -> Magento Connect Manager`

- Re-enter your credentials

- Click the Choose File button

- Select the downloaded `tgz` extension from your file system

- Click Upload

- Click Install Now

- Magento Connect will install the package into your system

## Copying Extension Source

- Ensure your Magento Cache is off, and that Magento is not running in compilation mode

- Copy the contents of the extension's `app` folder to your server.  Be sure you're uploading the contents of the folder, and not replacing your entire system's app folder

- With the Magento cache off or cleared, browse to `System -> Configuration -> Advanced` and ensure the `WindsorCircle_Analytics` extension is installed

- If you're using the Magento class compiler, recompile your classes

- If you're using the Magento cache, reenable it

## Post Installation Steps

After installing the extension, you may enter your Windsor Circle Site Analytics key at

    System -> Configuration -> Analytics
    
If this page returns a 404 (common during a manual install) logout and log back in to clear your cached Magento session.      
