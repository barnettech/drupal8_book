<?php
/**
 * @file
 * Contains \Drupal\hello_world\HelloWorldController.
 */
 
namespace Drupal\hello_world\Controller;
 
use Symfony\Component\DependencyInjection\ContainerAware;
 
class HelloWorldController extends ContainerAware {
 
  /**
   * Page Callback Method to Print out Hello World Text to the Screen.
   */
  public function myCallbackMethod() {
    $content = '
<a id="top"></a>
    <h2>
      <p><a href="#section1">Visit Section 1</a></p>
      <p><a href="#section2">Visit Section 2</a></p>
      <p><a href="#section3">Visit Section 3</a></p>
      <p><a href="#section4">Visit Section 4</a></p>
      <p><a href="#section5">Visit Section 5</a></p>
    </h2>


    <p><h2><a id="section1">Section 1</a></h2><p>
    <p>
      Veggies sunt bona vobis, proinde vos postulo esse magis tigernut wakame jícama spring onion tatsoi zucchini yarrow.  
Komatsuna amaranth catsear celery quandong zucchini chickweed chard coriander spring onion winter purslane turnip greens swiss chard radicchio bok choy mustard squash. Rock melon carrot tomatillo cabbage rock melon leek courgette. Chickweed beetroot tigernut epazote bitterleaf courgette dandelion bell pepper earthnut pea salsify radicchio soko sea lettuce okra pumpkin. Veggies sunt bona vobis, proinde vos postulo esse magis tigernut wakame jícama spring onion tatsoi zucchini yarrow.  
Komatsuna amaranth catsear celery quandong zucchini chickweed chard coriander spring onion winter purslane turnip greens swiss chard radicchio bok choy mustard squash. Rock melon carrot tomatillo cabbage rock melon leek courgette. Chickweed beetroot tigernut epazote bitterleaf courgette dandelion bell pepper earthnut pea salsify radicchio soko sea lettuce okra pumpkin.
Veggies sunt bona vobis, proinde vos postulo esse magis tigernut wakame jícama spring onion tatsoi zucchini yarrow.  
Komatsuna amaranth catsear celery quandong zucchini chickweed chard coriander spring onion winter purslane turnip greens swiss chard radicchio bok choy mustard squash. Rock melon carrot tomatillo cabbage rock melon leek courgette. Chickweed beetroot tigernut epazote bitterleaf courgette dandelion bell pepper earthnut pea salsify radicchio soko sea lettuce okra pumpkin.
Veggies sunt bona vobis, proinde vos postulo esse magis tigernut wakame jícama spring onion tatsoi zucchini yarrow.  
Komatsuna amaranth catsear celery quandong zucchini chickweed chard coriander spring onion winter purslane turnip greens swiss chard radicchio bok choy mustard squash. Rock melon carrot tomatillo cabbage rock melon leek courgette. Chickweed beetroot tigernut epazote bitterleaf courgette dandelion bell pepper earthnut pea salsify radicchio soko sea lettuce okra pumpkin.
Veggies sunt bona vobis, proinde vos postulo esse magis tigernut wakame jícama spring onion tatsoi zucchini yarrow.  
Komatsuna amaranth catsear celery quandong zucchini chickweed chard coriander spring onion winter purslane turnip greens swiss chard radicchio bok choy mustard squash. Rock melon carrot tomatillo cabbage rock melon leek courgette. Chickweed beetroot tigernut epazote bitterleaf courgette dandelion bell pepper earthnut pea salsify radicchio soko sea lettuce okra pumpkin.
Veggies sunt bona vobis, proinde vos postulo esse magis tigernut wakame jícama spring onion tatsoi zucchini yarrow.  
Komatsuna amaranth catsear celery quandong zucchini chickweed chard coriander spring onion winter purslane turnip greens swiss chard radicchio bok choy mustard squash. Rock melon carrot tomatillo cabbage rock melon leek courgette. Chickweed beetroot tigernut epazote bitterleaf courgette dandelion bell pepper earthnut pea salsify radicchio soko sea lettuce okra pumpkin.

  </p>
  <p><h2><a href="#top">Take me back to the top!</a></h2></p>



    <h2><a id="section2">Section 2</a></h2>
    <p>
      Peanut mustard chickweed lotus root yarrow summer purslane desert raisin endive corn green bean rutabaga pumpkin lettuce. Arugula zucchini courgette leek bunya nuts eggplant water spinach tatsoi yarrow potato rock melon kohlrabi jícama bell pepper shallot burdock. Pumpkin chicory caulie tigernut courgette celery. Tigernut salad cress komatsuna earthnut pea cauliflower bell pepper spring onion cucumber. Kale taro cress broccoli beetroot corn salsify water spinach chickpea beet greens cucumber dandelion arugula prairie turnip caulie cauliflower.  Peanut mustard chickweed lotus root yarrow summer purslane desert raisin endive corn green bean rutabaga pumpkin lettuce. Arugula zucchini courgette leek bunya nuts eggplant water spinach tatsoi yarrow potato rock melon kohlrabi jícama bell pepper shallot burdock. Pumpkin chicory caulie tigernut courgette celery. Tigernut salad cress komatsuna earthnut pea cauliflower bell pepper spring onion cucumber. Kale taro cress broccoli beetroot corn salsify water spinach chickpea beet greens cucumber dandelion arugula prairie turnip caulie cauliflower.
 Peanut mustard chickweed lotus root yarrow summer purslane desert raisin endive corn green bean rutabaga pumpkin lettuce. Arugula zucchini courgette leek bunya nuts eggplant water spinach tatsoi yarrow potato rock melon kohlrabi jícama bell pepper shallot burdock. Pumpkin chicory caulie tigernut courgette celery. Tigernut salad cress komatsuna earthnut pea cauliflower bell pepper spring onion cucumber. Kale taro cress broccoli beetroot corn salsify water spinach chickpea beet greens cucumber dandelion arugula prairie turnip caulie cauliflower.
 Peanut mustard chickweed lotus root yarrow summer purslane desert raisin endive corn green bean rutabaga pumpkin lettuce. Arugula zucchini courgette leek bunya nuts eggplant water spinach tatsoi yarrow potato rock melon kohlrabi jícama bell pepper shallot burdock. Pumpkin chicory caulie tigernut courgette celery. Tigernut salad cress komatsuna earthnut pea cauliflower bell pepper spring onion cucumber. Kale taro cress broccoli beetroot corn salsify water spinach chickpea beet greens cucumber dandelion arugula prairie turnip caulie cauliflower.
 Peanut mustard chickweed lotus root yarrow summer purslane desert raisin endive corn green bean rutabaga pumpkin lettuce. Arugula zucchini courgette leek bunya nuts eggplant water spinach tatsoi yarrow potato rock melon kohlrabi jícama bell pepper shallot burdock. Pumpkin chicory caulie tigernut courgette celery. Tigernut salad cress komatsuna earthnut pea cauliflower bell pepper spring onion cucumber. Kale taro cress broccoli beetroot corn salsify water spinach chickpea beet greens cucumber dandelion arugula prairie turnip caulie cauliflower.
 Peanut mustard chickweed lotus root yarrow summer purslane desert raisin endive corn green bean rutabaga pumpkin lettuce. Arugula zucchini courgette leek bunya nuts eggplant water spinach tatsoi yarrow potato rock melon kohlrabi jícama bell pepper shallot burdock. Pumpkin chicory caulie tigernut courgette celery. Tigernut salad cress komatsuna earthnut pea cauliflower bell pepper spring onion cucumber. Kale taro cress broccoli beetroot corn salsify water spinach chickpea beet greens cucumber dandelion arugula prairie turnip caulie cauliflower.

    </p>
    <p><h2><a href="#top">Take me back to the top!</a></h2></p>

    <h2><a id="section3">Section 3</a></h2>
    <p>
Kombu welsh onion melon broccoli rabe water chestnut dulse epazote salsify tomato sweet pepper cabbage courgette kombu carrot beetroot chard. Onion onion corn asparagus caulie brussels sprout horseradish. Wattle seed collard greens avocado carrot turnip greens kombu sierra leone bologi celtuce beetroot radicchio scallion sea lettuce.Kombu welsh onion melon broccoli rabe water chestnut dulse epazote salsify tomato sweet pepper cabbage courgette kombu carrot beetroot chard. Onion onion corn asparagus caulie brussels sprout horseradish. Wattle seed collard greens avocado carrot turnip greens kombu sierra leone bologi celtuce beetroot radicchio scallion sea lettuce.
Kombu welsh onion melon broccoli rabe water chestnut dulse epazote salsify tomato sweet pepper cabbage courgette kombu carrot beetroot chard. Onion onion corn asparagus caulie brussels sprout horseradish. Wattle seed collard greens avocado carrot turnip greens kombu sierra leone bologi celtuce beetroot radicchio scallion sea lettuce.
Kombu welsh onion melon broccoli rabe water chestnut dulse epazote salsify tomato sweet pepper cabbage courgette kombu carrot beetroot chard. Onion onion corn asparagus caulie brussels sprout horseradish. Wattle seed collard greens avocado carrot turnip greens kombu sierra leone bologi celtuce beetroot radicchio scallion sea lettuce.
Kombu welsh onion melon broccoli rabe water chestnut dulse epazote salsify tomato sweet pepper cabbage courgette kombu carrot beetroot chard. Onion onion corn asparagus caulie brussels sprout horseradish. Wattle seed collard greens avocado carrot turnip greens kombu sierra leone bologi celtuce beetroot radicchio scallion sea lettuce.
Kombu welsh onion melon broccoli rabe water chestnut dulse epazote salsify tomato sweet pepper cabbage courgette kombu carrot beetroot chard. Onion onion corn asparagus caulie brussels sprout horseradish. Wattle seed collard greens avocado carrot turnip greens kombu sierra leone bologi celtuce beetroot radicchio scallion sea lettuce.
Kombu welsh onion melon broccoli rabe water chestnut dulse epazote salsify tomato sweet pepper cabbage courgette kombu carrot beetroot chard. Onion onion corn asparagus caulie brussels sprout horseradish. Wattle seed collard greens avocado carrot turnip greens kombu sierra leone bologi celtuce beetroot radicchio scallion sea lettuce.
  </p>
  <p><h2><a href="#top">Take me back to the top!</a></h2></p>


    <h2><a id="section4">Section 4</a></h2>
    <p>
      Artichoke arugula collard greens kale tomato scallion catsear celery turnip bunya nuts endive seakale wattle seed nori daikon fava bean parsnip. Burdock zucchini caulie garlic rock melon pumpkin. Eggplant endive kombu asparagus tomatillo artichoke. Artichoke arugula collard greens kale tomato scallion catsear celery turnip bunya nuts endive seakale wattle seed nori daikon fava bean parsnip. Burdock zucchini caulie garlic rock melon pumpkin. Eggplant endive kombu asparagus tomatillo artichoke.
 Artichoke arugula collard greens kale tomato scallion catsear celery turnip bunya nuts endive seakale wattle seed nori daikon fava bean parsnip. Burdock zucchini caulie garlic rock melon pumpkin. Eggplant endive kombu asparagus tomatillo artichoke.
 Artichoke arugula collard greens kale tomato scallion catsear celery turnip bunya nuts endive seakale wattle seed nori daikon fava bean parsnip. Burdock zucchini caulie garlic rock melon pumpkin. Eggplant endive kombu asparagus tomatillo artichoke.
 Artichoke arugula collard greens kale tomato scallion catsear celery turnip bunya nuts endive seakale wattle seed nori daikon fava bean parsnip. Burdock zucchini caulie garlic rock melon pumpkin. Eggplant endive kombu asparagus tomatillo artichoke.
 Artichoke arugula collard greens kale tomato scallion catsear celery turnip bunya nuts endive seakale wattle seed nori daikon fava bean parsnip. Burdock zucchini caulie garlic rock melon pumpkin. Eggplant endive kombu asparagus tomatillo artichoke.
 Artichoke arugula collard greens kale tomato scallion catsear celery turnip bunya nuts endive seakale wattle seed nori daikon fava bean parsnip. Burdock zucchini caulie garlic rock melon pumpkin. Eggplant endive kombu asparagus tomatillo artichoke.
 Artichoke arugula collard greens kale tomato scallion catsear celery turnip bunya nuts endive seakale wattle seed nori daikon fava bean parsnip. Burdock zucchini caulie garlic rock melon pumpkin. Eggplant endive kombu asparagus tomatillo artichoke.
 Artichoke arugula collard greens kale tomato scallion catsear celery turnip bunya nuts endive seakale wattle seed nori daikon fava bean parsnip. Burdock zucchini caulie garlic rock melon pumpkin. Eggplant endive kombu asparagus tomatillo artichoke.
   </p>
   <p><h2><a href="#top">Take me back to the top!</a></h2></p>


    <h2><a id="section5">Section 5</a></h2>
    <p>
      Artichoke parsley ricebean desert raisin caulie grape kakadu plum collard greens leek courgette seakale mustard nori sorrel amaranth courgette peanut beetroot. Maize corn beet greens lettuce broccoli parsnip garlic chickweed groundnut garbanzo brussels sprout kombu rock melon bamboo shoot seakale endive cauliflower. Celery cucumber coriander cress desert raisin silver beet pumpkin quandong cauliflower kombu garlic squash.  Artichoke parsley ricebean desert raisin caulie grape kakadu plum collard greens leek courgette seakale mustard nori sorrel amaranth courgette peanut beetroot. Maize corn beet greens lettuce broccoli parsnip garlic chickweed groundnut garbanzo brussels sprout kombu rock melon bamboo shoot seakale endive cauliflower. Celery cucumber coriander cress desert raisin silver beet pumpkin quandong cauliflower kombu garlic squash.
 Artichoke parsley ricebean desert raisin caulie grape kakadu plum collard greens leek courgette seakale mustard nori sorrel amaranth courgette peanut beetroot. Maize corn beet greens lettuce broccoli parsnip garlic chickweed groundnut garbanzo brussels sprout kombu rock melon bamboo shoot seakale endive cauliflower. Celery cucumber coriander cress desert raisin silver beet pumpkin quandong cauliflower kombu garlic squash.
 Artichoke parsley ricebean desert raisin caulie grape kakadu plum collard greens leek courgette seakale mustard nori sorrel amaranth courgette peanut beetroot. Maize corn beet greens lettuce broccoli parsnip garlic chickweed groundnut garbanzo brussels sprout kombu rock melon bamboo shoot seakale endive cauliflower. Celery cucumber coriander cress desert raisin silver beet pumpkin quandong cauliflower kombu garlic squash.
 Artichoke parsley ricebean desert raisin caulie grape kakadu plum collard greens leek courgette seakale mustard nori sorrel amaranth courgette peanut beetroot. Maize corn beet greens lettuce broccoli parsnip garlic chickweed groundnut garbanzo brussels sprout kombu rock melon bamboo shoot seakale endive cauliflower. Celery cucumber coriander cress desert raisin silver beet pumpkin quandong cauliflower kombu garlic squash.
 Artichoke parsley ricebean desert raisin caulie grape kakadu plum collard greens leek courgette seakale mustard nori sorrel amaranth courgette peanut beetroot. Maize corn beet greens lettuce broccoli parsnip garlic chickweed groundnut garbanzo brussels sprout kombu rock melon bamboo shoot seakale endive cauliflower. Celery cucumber coriander cress desert raisin silver beet pumpkin quandong cauliflower kombu garlic squash.
   </p>
   <p><h2><a href="#top">Take me back to the top!</a></h2></p>
      ';
    return $content;  
  }
}
