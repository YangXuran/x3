<?php

/* partials/footer.html */
class __TwigTemplate_76bfd9be1a42cb5872013f94b2c2c526c2f5589af4f3adf0516b3657b1687302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "</main>
</div>
</div>

<footer class=\"footer\">

\t";
        // line 8
        echo "\t";
        echo call_user_func_array($this->env->getFilter('trim')->getCallable(), array(call_user_func_array($this->env->getFilter('replace')->getCallable(), array(call_user_func_array($this->env->getFilter('removeComments')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "back"), "custom"), "footer"))), array("{{copy}}" => (((((("<p>&copy; " . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "current_year")) . " <a href=\"") . (isset($context["rootpath"]) ? $context["rootpath"] : null)) . "/\">") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "base_url")) . "</a></p>"))))));
        echo "

\t";
        // line 12
        echo "\t<p class=\"x3-footer-link\">X3 ";
        echo call_user_func_array($this->env->getFunction('random')->getCallable(), array($this->env, array(0 => "Photo Gallery Website", 1 => "Photography Website", 2 => "Image Gallery CMS", 3 => "Website for Photographers", 4 => "Online Portfolio")));
        echo " by <a href=\"https://www.photo.gallery\">www.photo.gallery</a></p>
</footer>

";
        // line 16
        echo "<script>
var x3_settings = ";
        // line 17
        echo call_user_func_array($this->env->getFunction('jsonSettings')->getCallable(), array((isset($context["page"]) ? $context["page"] : null)));
        echo ";
var x3_page = ";
        // line 18
        echo call_user_func_array($this->env->getFunction('pageJson')->getCallable(), array((isset($context["page_title"]) ? $context["page_title"] : null), (isset($context["page_description"]) ? $context["page_description"] : null), "", $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template_name"), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id"), (isset($context["preview_image_full"]) ? $context["preview_image_full"] : null), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink"), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "file_path")));
        echo ";
";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_core")) {
            // line 20
            echo "function jsFail(){
\tvar s = document.createElement('script');
\ts.type = 'text/javascript';
\ts.onload = imagevue_;
\ts.src = '";
            // line 24
            echo (isset($context["rootpath"]) ? $context["rootpath"] : null);
            echo "/app/public/js/";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "stacey_version");
            echo "/x3.min.js';
\tdocument.getElementsByTagName('head')[0].appendChild(s);
}
";
        }
        // line 28
        echo "</script>

";
        // line 31
        $context["custom_js_files"] = call_user_func_array($this->env->getFunction('x3_glob')->getCallable(), array("./content/custom/files/javascript/*include*.js", (("<script id=\"custom_javascript_{{index}}\" src=\"" . (isset($context["assetspath"]) ? $context["assetspath"] : null)) . "/content/custom/files/javascript/{{basename}}\"></script>")));
        // line 32
        if ((isset($context["custom_js_files"]) ? $context["custom_js_files"] : null)) {
            echo (isset($context["custom_js_files"]) ? $context["custom_js_files"] : null);
        }
        // line 33
        echo "
";
        // line 35
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array(call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "back"), "custom"), "js"))))))) {
            // line 36
            echo "<script id=\"custom-javascript\">";
            echo call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "back"), "custom"), "js")));
            echo "</script>
";
        }
        // line 38
        echo "
";
        // line 40
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_core")) {
            // line 41
            echo "<script src=\"https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/velocity-animate@1.0.1/velocity.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/velocity-animate@1.0.1/velocity.ui.min.js\"></script>
";
            // line 44
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "gallery"), "layout") == "slideshow")) {
                echo "<script src=\"https://cdn.jsdelivr.net/npm/fotorama@4.6.4/fotorama.js\"></script>";
            }
            // line 45
            echo "<script src=\"https://cdn.jsdelivr.net/npm/string@3.3.3/dist/string.min.js\"></script>
";
        } else {
            // line 47
            echo "<script src=\"";
            echo (isset($context["cdn_core"]) ? $context["cdn_core"] : null);
            echo "/vendor/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"";
            // line 48
            echo (isset($context["cdn_core"]) ? $context["cdn_core"] : null);
            echo "/vendor/velocity/1.0.1/velocity.min.js\"></script>
<script src=\"";
            // line 49
            echo (isset($context["cdn_core"]) ? $context["cdn_core"] : null);
            echo "/vendor/velocity/1.0.1/velocity.ui.min.js\"></script>
";
            // line 50
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "gallery"), "layout") == "slideshow")) {
                echo "<script src=\"";
                echo (isset($context["cdn_core"]) ? $context["cdn_core"] : null);
                echo "/vendor/fotorama/4.6.4/fotorama.js\"></script>";
            }
            // line 51
            echo "<script src=\"";
            echo (isset($context["cdn_core"]) ? $context["cdn_core"] : null);
            echo "/vendor/stringjs/3.3.3/string.min.js\"></script>
";
        }
        // line 53
        echo "
";
        // line 55
        echo "<script src=\"";
        echo (isset($context["cdn_core"]) ? $context["cdn_core"] : null);
        echo "/js/";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "stacey_version");
        echo "/x3.min.js\"";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_core")) {
            echo " onerror=\"jsFail()\"";
        }
        echo " onload=\"imagevue";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "cdn_core")) {
            echo "_";
        }
        echo "();\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  89 => 38,  990 => 357,  985 => 356,  983 => 355,  978 => 352,  975 => 350,  959 => 347,  929 => 336,  920 => 332,  916 => 330,  905 => 325,  901 => 323,  895 => 321,  892 => 320,  889 => 318,  865 => 311,  853 => 307,  850 => 306,  845 => 305,  842 => 304,  836 => 300,  830 => 299,  826 => 297,  824 => 287,  821 => 285,  815 => 284,  809 => 282,  803 => 280,  797 => 278,  791 => 276,  788 => 275,  783 => 274,  778 => 273,  769 => 271,  766 => 269,  763 => 268,  760 => 267,  751 => 264,  745 => 261,  742 => 259,  724 => 253,  717 => 251,  714 => 250,  680 => 247,  677 => 245,  674 => 244,  671 => 242,  668 => 241,  665 => 240,  662 => 239,  659 => 238,  656 => 237,  653 => 236,  645 => 232,  642 => 231,  639 => 230,  636 => 228,  629 => 225,  625 => 223,  619 => 221,  616 => 220,  613 => 218,  601 => 215,  596 => 214,  590 => 213,  577 => 211,  572 => 210,  569 => 209,  566 => 207,  563 => 206,  555 => 202,  551 => 201,  548 => 200,  539 => 196,  536 => 195,  527 => 194,  524 => 193,  521 => 192,  515 => 191,  510 => 190,  505 => 189,  492 => 187,  489 => 186,  486 => 185,  483 => 184,  480 => 182,  477 => 181,  474 => 179,  471 => 178,  468 => 177,  465 => 176,  462 => 175,  459 => 174,  456 => 173,  453 => 172,  450 => 171,  447 => 170,  444 => 168,  441 => 167,  438 => 166,  433 => 165,  430 => 164,  427 => 163,  424 => 162,  421 => 161,  418 => 160,  415 => 159,  412 => 157,  409 => 156,  404 => 155,  401 => 154,  398 => 152,  395 => 151,  392 => 150,  346 => 135,  324 => 130,  321 => 128,  309 => 123,  291 => 116,  288 => 114,  285 => 113,  282 => 112,  276 => 109,  270 => 107,  267 => 105,  264 => 104,  261 => 103,  252 => 99,  249 => 97,  237 => 93,  234 => 92,  231 => 91,  228 => 89,  225 => 88,  222 => 86,  219 => 85,  216 => 84,  213 => 83,  139 => 56,  135 => 55,  132 => 53,  129 => 52,  121 => 49,  109 => 45,  979 => 304,  965 => 303,  960 => 301,  957 => 300,  953 => 345,  950 => 344,  944 => 342,  938 => 340,  935 => 339,  932 => 338,  926 => 286,  923 => 333,  918 => 284,  913 => 329,  908 => 326,  903 => 281,  898 => 280,  891 => 279,  886 => 278,  883 => 317,  877 => 315,  871 => 313,  868 => 271,  862 => 270,  859 => 309,  854 => 268,  849 => 267,  844 => 266,  839 => 265,  832 => 264,  828 => 263,  819 => 262,  816 => 260,  813 => 259,  810 => 258,  807 => 257,  804 => 256,  801 => 255,  798 => 253,  795 => 252,  790 => 249,  775 => 248,  772 => 246,  767 => 243,  764 => 242,  757 => 266,  754 => 265,  748 => 262,  743 => 238,  738 => 257,  730 => 255,  722 => 252,  716 => 234,  708 => 233,  703 => 232,  700 => 231,  698 => 230,  690 => 227,  686 => 226,  682 => 225,  679 => 224,  676 => 223,  673 => 222,  667 => 220,  664 => 219,  661 => 218,  658 => 217,  650 => 235,  647 => 214,  644 => 213,  641 => 212,  633 => 227,  630 => 209,  627 => 208,  621 => 206,  618 => 205,  610 => 217,  607 => 216,  597 => 200,  594 => 199,  591 => 197,  588 => 196,  585 => 212,  582 => 194,  579 => 193,  576 => 192,  573 => 191,  570 => 190,  567 => 189,  564 => 187,  561 => 186,  558 => 184,  553 => 183,  550 => 181,  545 => 199,  542 => 198,  506 => 177,  503 => 175,  500 => 174,  497 => 188,  494 => 172,  491 => 171,  488 => 170,  485 => 169,  481 => 167,  478 => 166,  475 => 165,  472 => 164,  469 => 162,  466 => 161,  463 => 160,  460 => 159,  457 => 158,  454 => 157,  451 => 156,  448 => 155,  445 => 154,  442 => 153,  439 => 152,  436 => 151,  434 => 150,  431 => 149,  428 => 148,  426 => 147,  423 => 146,  420 => 145,  417 => 143,  414 => 142,  411 => 141,  408 => 140,  405 => 138,  402 => 137,  399 => 136,  396 => 135,  393 => 134,  390 => 133,  387 => 149,  384 => 148,  378 => 146,  372 => 144,  369 => 143,  366 => 142,  363 => 141,  357 => 138,  354 => 137,  351 => 136,  348 => 114,  345 => 113,  342 => 112,  336 => 133,  333 => 109,  330 => 132,  327 => 131,  318 => 127,  315 => 125,  312 => 124,  306 => 122,  279 => 111,  273 => 108,  265 => 95,  242 => 87,  230 => 82,  209 => 74,  206 => 73,  203 => 72,  189 => 67,  186 => 66,  183 => 65,  180 => 64,  177 => 63,  165 => 58,  156 => 55,  150 => 52,  147 => 61,  123 => 48,  118 => 48,  97 => 41,  381 => 147,  375 => 145,  373 => 146,  370 => 145,  367 => 143,  360 => 140,  356 => 136,  340 => 131,  325 => 124,  319 => 122,  316 => 121,  313 => 119,  303 => 120,  300 => 119,  297 => 118,  294 => 117,  284 => 98,  281 => 110,  278 => 109,  275 => 107,  269 => 105,  257 => 93,  254 => 92,  246 => 96,  240 => 94,  236 => 85,  233 => 84,  227 => 81,  205 => 81,  202 => 79,  181 => 70,  175 => 68,  172 => 67,  169 => 65,  166 => 65,  163 => 64,  160 => 62,  148 => 57,  145 => 56,  133 => 51,  111 => 41,  83 => 36,  80 => 32,  174 => 62,  157 => 61,  154 => 59,  114 => 45,  99 => 44,  94 => 41,  86 => 35,  73 => 30,  60 => 23,  48 => 16,  70 => 28,  51 => 19,  42 => 13,  137 => 54,  134 => 53,  127 => 51,  124 => 50,  120 => 50,  117 => 46,  106 => 44,  103 => 45,  100 => 42,  93 => 37,  76 => 29,  66 => 26,  58 => 22,  45 => 15,  38 => 11,  96 => 42,  61 => 23,  56 => 20,  44 => 14,  36 => 11,  27 => 8,  365 => 134,  362 => 133,  352 => 127,  349 => 134,  347 => 125,  343 => 132,  339 => 134,  337 => 129,  331 => 127,  328 => 126,  323 => 115,  320 => 114,  317 => 112,  311 => 110,  308 => 109,  305 => 107,  299 => 105,  296 => 104,  292 => 99,  286 => 98,  283 => 96,  277 => 94,  274 => 93,  243 => 95,  239 => 86,  226 => 71,  223 => 84,  220 => 68,  214 => 66,  211 => 65,  208 => 82,  201 => 71,  198 => 70,  195 => 69,  192 => 68,  185 => 56,  178 => 69,  171 => 61,  168 => 59,  162 => 57,  159 => 56,  142 => 58,  136 => 52,  130 => 50,  115 => 47,  112 => 48,  91 => 34,  69 => 28,  65 => 23,  53 => 20,  47 => 18,  32 => 9,  22 => 3,  108 => 40,  105 => 39,  92 => 40,  88 => 36,  85 => 35,  81 => 35,  78 => 33,  74 => 32,  71 => 27,  67 => 24,  55 => 18,  52 => 17,  49 => 16,  40 => 16,  34 => 10,  31 => 8,  29 => 7,  26 => 6,  24 => 4,  21 => 2,  266 => 104,  263 => 102,  260 => 94,  258 => 101,  255 => 100,  251 => 91,  248 => 89,  245 => 88,  241 => 88,  238 => 86,  224 => 80,  221 => 79,  218 => 78,  215 => 77,  212 => 75,  210 => 82,  207 => 80,  204 => 77,  199 => 77,  196 => 76,  193 => 74,  190 => 73,  187 => 72,  184 => 71,  182 => 69,  179 => 68,  176 => 67,  170 => 66,  167 => 64,  164 => 62,  161 => 60,  158 => 58,  155 => 57,  152 => 59,  149 => 55,  146 => 46,  143 => 52,  125 => 49,  122 => 39,  119 => 48,  116 => 49,  113 => 45,  110 => 48,  107 => 47,  104 => 43,  101 => 41,  98 => 40,  95 => 40,  90 => 35,  87 => 41,  84 => 36,  82 => 34,  79 => 33,  77 => 32,  75 => 31,  72 => 31,  68 => 28,  64 => 25,  62 => 22,  59 => 24,  57 => 20,  54 => 19,  50 => 17,  46 => 15,  43 => 17,  41 => 13,  39 => 12,  37 => 10,  35 => 10,  33 => 12,  30 => 8,  28 => 7,  25 => 5,  23 => 3,  19 => 1,);
    }
}