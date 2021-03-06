Note:  I have completely altered my approach on this challenge and published an alternative which uses events and is therefore much less invasive.

https://github.com/gknoppe-guidance/magento-cachebuster

# About

Has this ever happened to you?  You have just deployed a minor CSS fix and are reviewing the change with your stakeholder.  You tell them to go to the problem area and see how it's now fixed!  Yay!  You hear typing, they click "go" (because they don't know that the Enter button would do the same thing..), they navigate to the problem page and they say.. "Uhh, it still looks broken to me.."

You say, "Oh, it was a css change so you have to hit refresh"

They hit refresh and voilà!  It's fixed!

Of course not all of your users will know to click refresh to get the latest assets from your website. Guidance_Assetcache is a Magento module that adds timestamps to the URIs generated by Magento for skin files (in the /skin directory) and static js files (in the /js directory) automatically.

It uses the Magento cache to cache these timestamps, reducing unnecessary file access.

## Installation

1. Copy the app folder to your code base
1. Clear your Magento cache 
1. Enable the "Asset MTimes" cache type in "System > Cache Management"

## License

Guidance_Assetcache is released under the MIT License. See the LICENSE file for more details.