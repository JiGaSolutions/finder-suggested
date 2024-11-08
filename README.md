# Finder Suggested

## Description

Finder Suggested is a custom element designed for YooTheme Pro Builder, allowing you to leverage Joomla's Smart Search (Finder) capabilities directly in the builder. This element provides an enhanced search experience by displaying suggested keywords after a search query is performed. It is ideal for providing suggestions based on what users may have intended to search, offering a "Did you mean" feature similar to popular search engines. The suggested value is displayed separately from the search results, giving you complete flexibility in managing your page layout and search elements independently.

## Features

- Seamless integration with YooTheme Pro Builder.
- Displays suggested search terms based on user input ("Did you mean" functionality).
- Fully customizable output, decoupled from the standard search results.
- Utilizes Joomla's built-in Finder component for accurate search suggestions.
- Allows setting the search keyword as a dynamic data source from the Builder interface.

## Prerequisites

- Joomla 4.x with the Smart Search (Finder) component enabled.
- YooTheme Pro Builder installed.
- Basic understanding of YooTheme Pro Builder and Smart Search.

## Usage Instructions
### Installation

- download and unzip the element package
- create a [Child Theme](https://yootheme.com/support/yootheme-pro/joomla/developers-child-themes) in your YOOtheme Pro installation and activate the child theme
- copy the complete folder `finder-suggested` into the directory `/templates/yootheme_child/builder/` (Joomla!)

### Setup Data Source:

- When creating a template using YooTheme Pro Builder, add the Finder Suggested element from the available custom elements list.
- Set the data source to the keyword from Smart Search by selecting the "search keyword" field.
- This allows the custom element to dynamically generate suggested search results based on user input.

### Customize Display:

You can add this element independently to your template, which will enable you to manage its display separately from the rest of the search results. This gives you flexibility to determine how and where the suggestions appear.

### Additional Notes:

The custom element works in tandem with the Finder component (com_finder). It fetches suggested search results that may closely match the user's query.
The element will not interfere with existing search results and can be used in any YooTheme template where enhanced search capability is desired.

## Example

To add Finder Suggested to your page:
- Drag the Finder Suggested element from the builder interface into your page layout.
- Assign the search field (data source) from Smart Search.
- Upon searching, the element will display suggestions when there are close matches to what the user typed.

## Issues

If you encounter any issues while using Finder Suggested, please open an issue in the GitHub repository under the Issues section. Be sure to provide details such as the Joomla version, YooTheme version, and a description of the problem.

## About

Finder Suggested is designed as an open-source enhancement for Joomla websites utilizing YooTheme Pro Builder. It aims to provide a smarter search experience by integrating suggested keyword functionality seamlessly into custom-designed pages.

## Links

- [YOOtheme Pro Documentation: Introduction](https://yootheme.com/support/yootheme-pro/joomla/introduction)
- [YOOtheme Pro Documentation: Child Themes](https://yootheme.com/support/yootheme-pro/joomla/developers-child-themes)
- [YOOtheme Pro Documentation: Custom Elements](https://yootheme.com/support/yootheme-pro/joomla/developers-elements)
- [YOOtheme Support](https://yootheme.com/support)


