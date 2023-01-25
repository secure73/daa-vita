<?php
// wir definiren ein Kalsse einfach mit Keyword class dannach schreiben wir Klasse Name, 
//Bitte beachten!!!   Klass name immer muss Mit Größ buchstaben anfangen
//natürlich funktioniert Klass auto! aber das ist 
//Prinziep bei all Anwender im Ganzen Welt, Klass Immer PascalCase.
//PascalCase ist wie : Auto, AutoHandler , CustomerBill , StudentRoom
//Klasse soll Auch Immer singullar Sein: 
//Autos oder Students sind kein gute Name für Ein Kalasse!! 
class Auto
{
    //Attribute oder Eigenschaftern oder Properties
    // Direkt nachdem Klass Definierung können wir Properties definieren.
    // public bedeutet diese attribute kann bei Instance darausen diese Klass definiert werden
    // nachdem public, kommt type von Property , z.B string , integer, float, boolean usw...
    // nachdem property type, definieren wir einfach property (Klasse Variable)
    //properties sind einfach variable dass in ganzem Klass zugriffbar
    //in php wir definiern variable mit Zichnung $ und dannach variable name.
    //ende jede Kommand in php muss ";" geschrieben werden 
    //variabeln soll immer !!!!!!!!!!! camelCase sein !!!!!!!!!!!!!!!!!
    //z.B : $userCar , $studentsRaum , 
    public string $name;
    public float  $ps;


    /**
     * Jeder klass kann aber muss nicht ein Kunstruktur haben.
     * in alle Proggramierungsspache wir haben Kunstrukture.
     * constructer würde automatisch abrufen, "sofort" nachdem klass Instanzierung.
     * wenn wir möchten von ein Klass ein Instanz bauen, defineiren zu erst win variable,
     * dannach vergleichen wir variable zum new Klass.
     * $myauto = new Auto();
     */
    public function __construct()
    {
    }


    /**
     * wir können einfach ein funktion in unsere Klass definiren
     * zu erst definieren wir ob diese funktion public , private oder protected ist.
     * zur zeit arbeiten wir nur mit public , instance von klass hat zufriff zur nur public methoden.
     * than mussen wir keyword "function" zu schreiben. wise defineren wir function!
     * dannach function  oder moehtod namee. mansche Entwickler nennen dass function munschen 
     * nennen das method. beide sind synonum.  
     */
    public function run()
    {
        /**
         * in function body , schereiben wir logic von function , unsere run function 
         * hier wir sehen $this->name
         * $this bedeuted diese Klass. und mit -> wir haben zugriff zum alle diese Klass functions 
         * und properties (Eigenschaften). bei viele andere spachen , die nutzen . außer -> . wie C# oder Java etc...
         * wenn wir ein Instance von dise oder ein klass bauen nit keyword new, dannach wir können alle public properties 
         * (public variable oder public Eigenschaften ) ein wert geben.
         */
        echo $this->name." i am driving";

        /**besipiel 
         * $myCar = new Auto();                   create new instance of Auto
         * $myCar->name = "Mercedes";             set propery name of our new instance = "Mercedes"
         * $myCar->ps = 155;                      set property ps of our new instance = 155;  
         * $myCar->run();                         call function run()  
         * 
         * result will be :  Merceses i am driving
         */
    }

    public function hoop()
    {
        echo "beep beep";
    }

    public function brake()
    {
        echo "i will stopp";
    }
}
