<?php


defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\Component\Finder\Administrator\Indexer\Query;

$suggested_value = "";

if (!empty($props['content'])) {
    try {
         // Ottieni l'istanza dell'applicazione Joomla
         $app = Factory::getApplication();
         $request = $app->input;
 
         // Impostiamo i parametri per la query
         $options = [];
         $options['empty'] = 0;
         $options['filter'] = $request->getInt('f', '');
         $options['filters'] = $request->get('t', [], 'array');
         $options['input'] = $props['content'];
         $options['language'] = Factory::getLanguage()->getTag();
         $options['word_match'] = 'exact';
         $options['date1'] = $request->getString('d1', '');
         $options['when1'] = $request->getString('w1', '');
         $options['date2'] = $request->getString('d2', '');
         $options['when2'] = $request->getString('w2', '');
 
         // Crea l'oggetto Query con le opzioni impostate
         $query = new Query($options, Factory::getDbo());
 
         // Ottieni il suggerimento usando HTMLHelper
         $suggested = HTMLHelper::_('query.suggested', $query);
 
         // Controlla se esiste un suggerimento valido e lo aggiunge ai props
         if (!empty($suggested)) {
            $linkUrl = 'index.php?option=com_finder&view=search&q='.htmlspecialchars($suggested, ENT_COMPAT, 'UTF-8');
            $link = '<a href="' . $linkUrl . '">' . $suggested . '</a>';
            $suggested_value = Text::sprintf('COM_FINDER_SEARCH_SIMILAR', $link);
            // echo "<script>console.log('Suggerimenti trovati:', " . json_encode($suggested_value) . ");</script>";
         } 
     } catch (\Exception $e) {
         echo "<script>console.error('Errore durante il recupero dei suggerimenti:', " . json_encode($e->getMessage()) . ");</script>";
     }
 } else {
     echo "<script>console.log('Condizione per i suggerimenti non soddisfatta o chiave di ricerca vuota.');</script>";
 }




$el = $this->el($props['html_element'] ?: 'div', [

    'class' => [
        'uk-panel',
        'uk-text-{text_style}',
        'uk-text-{text_color}',
        'uk-dropcap {@dropcap}',
        'uk-column-{column}[@{column_breakpoint}]',
        'uk-column-divider {@column} {@column_divider}',
    ],

]);

// Column
$breakpoints = ['xl', 'l', 'm', 's', ''];

if ($props['column'] && false !== $index = array_search($props['column_breakpoint'], $breakpoints)) {

    [, $columns] = explode('-', $props['column']);

    foreach (array_splice($breakpoints, $index + 1, 4) as $breakpoint) {

        if ($columns < 2) {
            break;
        }

        $el->attr('class', ['uk-column-1-' . (--$columns) . ($breakpoint ? "@{$breakpoint}" : '')]);
    }
}

echo $el($props, $attrs, $suggested_value);
