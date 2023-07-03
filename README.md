# Ticker Messages
This is a demo TYPO3 extension that demonstrates how to output custom records without a "Classes" directory in the extension with DatabaseQueryProcessor in a categorized list view.

## Background
Just recently I received the question how to display ticker messages (consisting of a title and a RTE field) in different places or even different root sites in a catgorized form. Ticker messages get one or more categories. In the output it should be possible to control for which categories ticker messages should be displayed.

## The actual use case
TYPO3 integrators with little or no developer knowledge often ask themselves how they can easily display their own data sets in different places in the frontend.

Sometimes the news extension is used for this and sometimes this is achieved with the help of shortcut content elements. But each of these workarounds has its disadvantages or comes with a significant configuration overhead.

I would like to provide the aforementioned people with this extension template in order to solve the use case in the future in the "right way" and in a form that is relatively easy to understand based on the core functionality, that works in the latest TYPO3 version and that is especially backward compatible. Currently all versions from 10.4 up to 12.4 are supported.

## Acknowledgement
Many thanks to Thomas Löffler and his extension ["just_news"](https://extensions.typo3.org/extension/just_news), which gave the inspiration for this extension.
