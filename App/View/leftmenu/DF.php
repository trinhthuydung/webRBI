<head>
    <link rel="stylesheet" href="../../../../Public/css/home.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
</head>
<body>
<div>
   <form action="../../Controller/home/equipmentTempController.php" onSubmit="return validateForm()" name="plant" method="POST">
   <fieldset>
            <!--<table>
            <legend>DF</legend>
            <tr>-->
            <table>
                <legend><p><i><span style="color: red">Thinning Damage</span></i></p></legend>
            </tr>
            <tr>
                <td><strong>CrackPresent</strong><br/><input list="pltCrackPresent" name="pltCrackPresent">
                   <datalist id="pltCrackPresent">
                   <option value="Yes"/>
                   <option value="No"/>
                   </datalist>
                <td><strong>PBarrier</strong><br/><input type="text" name="pltPBarrier">
                   <datalist id="pltPBarrier">
                   <option value="Yes"/>
                   <option value="No"/>   
                   </datalist>
                <td><strong>Component Type</strong><br/><input list="pltComponentType" name="pltComponentType">
                    <datalist id="pltComponentType">
                    <option value="COMPC"/>
                    <option value="COMPR"/>
                    <option value="HEXSS"/>
                    <option value="HEXTS"/>
                    <option value="HEXTUBE"/>
                    <option value="PIPE-1"/>
                    <option value="PIPE-2"/>
                    <option value="PIPE-4"/>
                    <option value="PIPE-6"/>
                    <option value="PIPE-8"/>
                    <option value="PIPE-10"/>
                    <option value="PIPE-12"/>
                    <option value="PIPE-16"/>
                    <option value="PIPEGT16"/>
                    <option value="PUMP2S"/>
                    <option value="PUMPR"/>
                    <option value="PUMP1S"/>
                    <option value="TANKBOTTOM"/>
                    <option value="COURSE-1"/>
                    <option value="COURSE-2"/>
                    <option value="COURSE-3"/>
                    <option value="COURSE-4"/>
                    <option value="COURSE-5"/>
                    <option value="COURSE-6"/>
                    <option value="COURSE-7"/>
                    <option value="COURSE-8"/>
                    <option value="COURSE-9"/>
                    <option value="COURSE-10"/>
                    <option value="KODRUM"/>
                    <option value="COLBTM"/>
                    <option value="FINFAN"/>
                    <option value="FILTER"/>
                    <option value="DRUM"/>
                    <option value="REACTOR"/>
                    <option value="COLTOP"/>
                    <option value="COLMID"/>
                    </datalist>
                <td><strong>Last Cracking InDate (mm/dd/yyyy)</strong><br/><input type="text" name="pltLastCracking"></td>
                </tr>           
                    
                 <tr>   
                <td><strong>InLiner</strong><br/><input list="pltInLiner" name="pltInLiner"></td>
                   <datalist id="pltInLiner">
                   <option value="Yes"/>
                   <option value="No"/>
                   </datalist>
                <td><strong>Catalog Thinning</strong><br/><input list="pltCaThinning" name="pltCaThinning"></td>
                   <datalist id="pltCaThinning">
                   <option value="Highly Effective"/>
                   <option value="Usually Effective"/>
                   <option value="Fairly Effective"/>
                   <option value="Poorly Effective"/>
                   <option value="Ineffective"/>
                   </datalist>
                   
                <td><strong>Number of Inspection [lan]</strong><br/><input list="pltNuOfInspection" name="pltNuOfInspection"></td>
                   <datalist id="pltNuOfInspection">
                   <option value="1"/>
                   <option value="2"/>
                   <option value="3"/>
                   <option value="4"/>
                   <option value="5"/>
                   <option value="6"/>
                   </datalist>
                <td><strong>Check Thinning</strong><br/><input list="pltChThining" name="pltChThining"></td>
                   <datalist id="pltChThining">
                   <option value="Local"/>
                   <option value="General"/>
                   </datalist>
                
                </tr>
                <tr>
                <td><strong>Cladding</strong><br/><input list="pltCladding" name="pltCladding"></td>
                   <datalist id="pltCladding">
                   <option value="Yes"/>
                   <option value="No"/>
                   </datalist>
                
                <td><strong>Injection Point Fip</strong><br/><input list="pltInPoiFip" name="pltInPoiFip"></td>
                   <datalist id="pltInPoiFip">
                   <option value="Necessary"/>
                   <option value="No Necessary"/>
                   </datalist>
           
                <td><strong>Dead Legs Fdl</strong><br/><input list="pltDeLegFdl" name="pltDeLegFdl"></td>
                   <datalist id="pltDeLegFdl">
                   <option value="Necessary"/>
                   <option value="No Necessary"/>
                   </datalist>
                <td><strong>Welded Construction Fwd</strong><br/><input list="pltWelConsFwd" name="pltWelConsFwd"></td>
                   <datalist id="pltWelConsFwd">
                   <option value="Welded"/>
                   <option value="Otherwise"/>
                   </datalist>
                 </tr>
                 <tr>
                <td><strong>Maintenance Accordance Fam</strong><br/><input list="pltMaiAccFsm" name="pltMaiAccFsm"></td>
                    <datalist id="pltMaiAccFsm">
                    <option value="Maintained"/>
                    <option value="Otherwise"/>
                   </datalist>
                <td><strong>Settlement Fsm</strong><br/><input list="pltSettFsm" name="pltSettFsm"></td>
                    <datalist id="pltSettFsm">
                    <option value="Exceeds"/>
                    <option value="Meets"/>
                    <option value="Settlement never evaluated"/>
                    <option value="No settlement"/>
                   </datalist>
                    
           
           
                <td><strong>Corrosion rate for Base Matel</strong><br/><input type="text" name="pltCorrRaBaseMatel"></td>
                <td><strong>Corrosion rate for Cladding[mpy]</strong><br/><input type="text" name="pltCorrRaCladding"></td>
                </tr>
                <tr>
                <td><strong>Thickness of comp base metal [in]</strong><br/><input type="text" name="pltThickBaseMetal"></td>
                </tr>
                

           </table>
           </fieldset>
           <fieldset>
           <table>
            <legend><p><i><span style="color: red">Linning Damage</span></i></p></legend>
             <tr>
                <td><strong>linning Type</strong><br/><input list="pltLinType" name="pltLinType"></td>
                    <datalist id="pltLinType">
                    <option value="StripLined"/>
                    <option value="CastableRefractory"/>
                    <option value="CastableCondition"/>
                    <option value="GlassLined"/>
                    <option value="AcidBrick"/>
                    <option value="Fiberglass"/>
                   </datalist>
                <td><strong>Linning Adjusmen(Flc)</strong><br/><input list="pltLinAdj" name="pltLinAdj"></td>
                   <datalist id="pltLinAdj">
                   <option value="Poor"/>
                   <option value="Average"/>
                   <option value="Good"/>
                   </datalist>
                <td><strong>Year In Service</strong><br/><input type="text" name="pltYearSer"></td>
            </tr>
            </table>
           </fieldset>
           <fieldset>
           <table>
               <legend><p><i><span style="color: red">Caustic Damage</span></i></p></legend>
           </tr>
           <tr>
               <td><strong>Level Caustic</strong><br/><input list="pltvlcaustic" name="pltvlcaustic"></td>
                   <datalist id="pltvlcaustic">
                   <option value="High"/>
                   <option value="Medium"/>
                   <option value="Low"/>
                   <option value="None"/>
                   </datalist>
                   
               <td><strong>Catalog Caustic</strong><br/><input list="pltCatCaustic" name="pltCatCaustic"></td>
                   <datalist id="pltCatCaustic">
                   <option value="Highly Effective"/>
                   <option value="Usually Effective"/>
                   <option value="Fairly Effective"/>
                   <option value="Poorly Effective"/>
                   <option value="Ineffective"/>
                   </datalist>
           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           
               <legend><p><i><span style="color: red">Amine Damage</span></i></p></legend>
           </tr>
           <tr>
               <td><strong>Level Amine</strong><br/><input list="pltLvlAmine" name="pltLvlAmine"></td>
               <datalist id="pltLvlAmine">
                   <option value="High"/>
                   <option value="Medium"/>
                   <option value="Low"/>
                   <option value="None"/>
                   </datalist>               
               <td><strong>Catalog Amine</strong><br/><input list="pltCatAmine" name="pltCatAmine"></td>
               <datalist id="pltCatAmine">
                   <option value="Highly Effective"/>
                   <option value="Usually Effective"/>
                   <option value="Fairly Effective"/>
                   <option value="Poorly Effective"/>
                   <option value="Ineffective"/>
                   </datalist>
               
           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           
           
               <legend><p><i><span style="color: red">Sulfide Damage</span></i></p></legend>
           </tr>
           <tr>
               <td><strong>Catalog Sulfide</strong><br/><input list="pltCaSulfide" name="pltCaSulfide"></td>
                   <datalist id="pltCaSulfide">
                   <option value="Highly Effective"/>
                   <option value="Usually Effective"/>
                   <option value="Fairly Effective"/>
                   <option value="Poorly Effective"/>
                   <option value="Ineffective"/>
                   </datalist>
                   
               <td><strong>pH</strong><br/><input type="text" name="pltPH">
               <td><strong>Sulfide Concentration</strong><br/><input type="text" name="pltSuConcentration">
               <td><strong>PWHT</strong><br/><input type="text" name="pltPWHT"></td>

           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           
               <legend><p><i><span style="color: red">HIC/SOHIC- H2S</span></i></p></legend>
           </tr>
           <tr>
               <td><strong>Catalog HIC/H2S</strong><br/><input list="pltCaH2S" name="pltCaH2S"></td>
                   <datalist id="pltCaH2S">
                   <option value="Highly Effective"/>
                   <option value="Usually Effective"/>
                   <option value="Fairly Effective"/>
                   <option value="Poorly Effective"/>
                   <option value="Ineffective"/>
                   </datalist>
                   
               <td><strong>H2S Concentration</strong><br/><input type="text" name="pltH2SConcentration"></td>

           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           
              <legend><p><i><span style="color: red">Carbonate Damage</span></i></p></legend>
           </tr>
           <tr>
               <td><strong>Catalog Cacbon</strong><br/><input list="pltCaCacbon" name="pltCaCacbon"></td>
                   <datalist id="pltCaCacbon">
                   <option value="Highly Effective"/>
                   <option value="Usually Effective"/>
                   <option value="Fairly Effective"/>
                   <option value="Poorly Effective"/>
                   <option value="Ineffective"/>
                   </datalist>
                   
               <td><strong>Cacbon Concentration</strong><br/><input type="text" name="pltCaConcentration">

           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           
               <legend><p><i><span style="color: red">PTA Damage</span></i></p></legend>
           </tr>
           <tr>
               <td><strong>Catalog PTA</strong><br/><input list="pltCaPTA" name="pltCaPTA"></td>
                   <datalist id="pltCaPTA">
                   <option value="Highly Effective"/>
                   <option value="Usually Effective"/>
                   <option value="Fairly Effective"/>
                   <option value="Poorly Effective"/>
                   <option value="Ineffective"/>
                   </datalist>
                   
               <td><strong>Function of heat Treatment</strong><br/><input list="pltFunHeaTreat" name="pltFunHeaTreat"></td>
                   <datalist id="pltFunHeaTreat">
                   <option value="Solution Annealed"/>
                   <option value="Solution Before Weld"/>
                   <option value="Solution After Weld"/>
                   </datalist>
                   

           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
               <legend><p><i><span style="color: red">CLSCC Damage</span></i></p></legend>>
           </tr>
           <tr>
               <td><strong>Catalog CLSCC</strong><br/><input list="pltCaCLSCC" name="pltCaCLSCC"></td>
                   <datalist id="pltCaCLSCC">
                   <option value="Highly Effective"/>
                   <option value="Usually Effective"/>
                   <option value="Fairly Effective"/>
                   <option value="Poorly Effective"/>
                   <option value="Ineffective"/>
                   </datalist>
                   
               <td><strong>Temperat of PH</strong><br/><input type="text" name="pltTemperPH">
               <td><strong>Clo Concentration</strong><br/><input type="text" name="pltCloConcentration">

           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           
               <legend><p><i><span style="color: red">HF Damage</span></i></p></legend>
           </tr>
           <tr>
               <td><strong>Catalog HF</strong><br/><input list="pltCaHF" name="pltCaHF"></td>
                   <datalist id="pltCaHF">
                   <option value="Highly Effective"/>
                   <option value="Usually Effective"/>
                   <option value="Fairly Effective"/>
                   <option value="Poorly Effective"/>
                   <option value="Ineffective"/>
                   </datalist>
                   
               <td><strong>HF present</strong><br/><input list="pltHFPresent" name="pltHFPresent"></td>
                   <datalist id="pltHFPresent">
                   <option value="Yes"/>
                   <option value="No"/>
                   </datalist>
               <td><strong>Brinell Hardness</strong><br/><input type="text" name="pltBrilHardness">

           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           <legend><p><i><span style="color: red">HIC/HF Damage</span></i></p></legend>
           <tr>
               <td><strong>Catalog HIC/H2F</strong><br/><input list="pltCaHICHF" name="pltCaHICHF"></td>
                   <datalist id="pltCaHICHF">
                   <option value="Highly Effective"/>
                   <option value="Usually Effective"/>
                   <option value="Fairly Effective"/>
                   <option value="Poorly Effective"/>
                   <option value="Ineffective"/>
                   </datalist>
                  
               <td><strong>Sulfur Concentration</strong><br/><input list="pltSulfurConcentration" name="pltSulfurConcentration"></td>
                   <datalist id="pltSulfurConcentration">
                   <option value="Marine / Cooling Tower Drift Area"/>
                   <option value="Temperate"/>
                   <option value="Arid / Dry"/>
                   <option value="Severe"/>
                   </datalist>
                   

           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           <legend><p><i><span style="color: red">External Corrosion Damage</span></i></p><legend>
           <tr>
               <td><strong>Catalog Extenal Corrosion</strong><br/><input list="pltCaExCorrosion" name="pltCaExCorrosion"></td>
                   <datalist id="pltCaExCorrosion">
                   <option value="Highly Effective"/>
                   <option value="Usually Effective"/>
                   <option value="Fairly Effective"/>
                   <option value="Poorly Effective"/>
                   <option value="Ineffective"/>
                   </datalist>
                   
               <td><strong>Driver Extend</strong><br/><input list="pltDriExtend" name="pltDriExtend"></td>
                   <datalist id="pltDriExtend">
                   <option value="Marine / Cooling Tower Drift Area"/>
                   <option value="Temperate"/>
                   <option value="Arid / Dry"/>
                   <option value="Severe"/>
                   </datalist>
                   
               <td><strong>Coat Quality</strong><br/><input list="pltCoQuality" name="pltCoQuality"></td>
                   <datalist id="pltCoQuality">
                   <option value="Poor|No"/>
                   <option value="Medium"/>
                   <option value="High"/>
                   </datalist>

           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           <legend><p><i><span style="color: red">CUI Ferrictic Component </span></i></p></legend>
           <tr>
               <td><strong>Catalog CUI</strong><br/><input list="pltCataCUI" name="pltCataCUI"></td>
                   <datalist id="pltCataCUI"> 
                   <option value="Highly Effective"/>
                   <option value="Usually Effective"/>
                   <option value="Fairly Effective"/>
                   <option value="Poorly Effective"/>
                   <option value="Ineffective"/>
                   </datalist>    
               <td><strong>Driver CUI</strong><br/><input list="pltDriCUI" name="pltDriCUI"></td>
                   <datalist id="pltDriCUI">
                   <option value="Marine / Cooling Tower Drift Area"/>
                   <option value="Temperate"/>
                   <option value="Arid / Dry"/>
                   <option value="Severe"/>
                   </datalist>
                   
               <td><strong>Corrosion Rate for CUI</strong><br/><input type="text" name="pltCorrRateCUI">
               <td><strong>Complexity</strong><br/><input list="pltComplexity" name="pltComplexity"></td>
                   <datalist id="pltComplexity">
                   <option value="Below Average"/>
                   <option value="average"/>
                   </datalist>

           </tr>
           <tr>
               <td><strong>Insulation</strong><br/><input list="pltInsu" name="pltInsu"></td>
                   <datalist id="pltInsu">
                   <option value="Above Average"/>
                   <option value="Average"/>
                   <option value="Below Average"/>
                   </datalist>
               <td><strong>Allow Config</strong><br/><input list="pltAllConfig" name="pltAllConfig"></td>
                   <datalist id="pltAllConfig">
                   <option value="Yes"/>
                   <option value="No"/>
                   </datalist>
               <td><strong>Enter Soil</strong><br/><input list="pltEnterSoil" name="pltEnterSoil"></td>
                   <datalist id="pltEnterSoil">
                   <option value="Yes"/>
                   <option value="No"/>
                   </datalist>
               <td><strong>Insulation Type</strong><br/><input list="pltInsuTpy" name="pltInsuTpy"></td>
                   <datalist id="pltInsuTpy">
                   <option value="Asbestos"/>
                   <option value="CalciumSilicate"/>
                   <option value="Fiberglass"/>
                   <option value="Foamglass"/>
                   <option value="MineralWool"/>
                   <option value="Pearlite"/>
                   <option value="None"/>
                   </datalist>
           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           <legend><p><i><span style="color: red">External CLSCC</span></i></p><legend>
           <tr>
               <td><strong>Catalog Externak CLSCC</strong><br/><input list="pltCaEXCLSCC" name="pltCaEXCLSCC"></td>
                   <datalist id="pltCaEXCLSCC">
                   <option value="Highly Effective"/>
                   <option value="Usually Effective"/>
                   <option value="Fairly Effective"/>
                   <option value="Poorly Effective"/>
                   <option value="Ineffective"/>
                   </datalist>
               <td><strong>Driver External CLSCC</strong><br/><input  list="pltDriExCLSCC" name="pltDriExCLSCC"></td>
                   <datalist id="pltDriExCLSCC">
                   <option value="Marine / Cooling Tower Drift Area"/>
                   <option value="Temperate"/>
                   <option value="Arid / Dry"/>
                   <option value="Severe"/>
                   </datalist>
                   

           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           <legend><p><i><span style="color: red">External CUI</span></i></p></legend>
           <tr>
               <td><strong>Piping Complexity</strong><br/><input list="pltPipingComp" name="pltPipingComp"></td>
                   <datalist id="pltPipingComp">
                   <option value="Below Average"/>
                   <option value="Above Average"/>
                   </datalist>
               <td><strong>Insulation Condition</strong><br/><input list="pltInsCondition" name="pltInsCondition"></td>
                   <datalist id="pltInsCondition">
                   <option value="Below Average"/>
                   <option value="Average"/>
                   <option value="Above Average"/>
                   </datalist>
           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           <legend><p><i><span style="color: red">HTHA</span></i></p></legend>
           <tr>
               <td><strong>Catalog HTHA</strong><br/><input list="pltCataHTHA" name="pltCataHTHA"></td>
                   <datalist id="pltCataHTHA">
                   <option value="Highly Effective"/>
                   <option value="Usually Effective"/>
                   <option value="Fairly Effective"/>
                   <option value="Poorly Effective"/>
                   <option value="Ineffective"/>
                   </datalist>
               <td><strong>Age HTHA[hours]</strong><br/><input type="text" name="pltAgeHTHA">
               <td><strong>Temperat ure HTHA</strong><br/><input type="text" name="pltTempHTHA">
               <td><strong>Hydrogen Partial Pressure</strong><br/><input type="text" name="pltHydParPress">
           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           <legend><p><i><span style="color: red">BrittleFacture</span></i></p></legend>
           <tr>
               <td><strong>TempMin for Brittle Facture</strong><br/><input type="text" name="pltTempMinBriFac">
               <td><strong>TempUpset of Brittle Facture</strong><br/><input type="text" name="pltTempUpsetBriFac">
               <td><strong> Temp Boiling for Brittle Facture</strong><br/><input type="text" name="pltTempBrittleFac">
               <!--<td><strong>Minimum Design Metal Temp</strong><br/><input type="text" name="pltMinimum">-->
         
           
               <td><strong>Tem Impact</strong><br/><input type="text" name="pltTemImpact">
           </td></tr>
           <tr>
               <td><strong>Material CUVE</strong><br/><input list="pltMatCUVE" name="pltMatCUVE"></td>
                   <datalist id="pltMatCUVE">
                   <option value="A"/>
                   <option value="B"/>
                   <option value="C"/>
                   <option value="D"/>
                   </datalist>
               <td><strong>Low temperture?</strong><br/><input list="pltLowTemp" name="pltLowTemp"></td>
                   <datalist id="pltLowTemp">
                   <option value="Yes"/>
                   <option value="No"/>
                   </datalist>
           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           <legend><p><i><span style="color: red">885Embrittlement Damage</span></i></p></legend>
           <tr>
               <td><strong>SCE</strong><br/><input type="text" name="pltSCE">
               <td><strong>Reference Temperture</strong><br/><input type="text" name="pltRefeTemperture">
               <td><strong>Temp Min for 885</strong><br/><input type="text" name="pltTemp885">
               <td><strong>Brittle Check</strong><br/><input list="pltBriCheck" name="pltBriCheck"></td>
                   <datalist id="pltBriCheck">
                   <option value="Yes"/>
                   <option value="No"/>
                   </datalist>
           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           <legend><p><i><span style="color: red"> Sigma Phase</span></i></p></legend>
           <tr>
               <td><strong>Temp Shutdown</strong><br/><input type="text" name="pltTempShutdown">
               <td><strong>Percent Sigma</strong><br/><input list="pltPerSigma" name="pltPerSigma"></td>
                   <datalist id="pltPerSigma">
                   <option value="Low (1-5%)"/>
                   <option value="Medium (5-10%)"/>
                   <option value="High (>=10%)"/>  
                   </datalist>          
           </tr>
           </table>
           </fieldset>
           <fieldset>
           <table>
           <legend><p><i><span style="color: red">Piping Chanical Fatugue Damage</span></i></p></legend>
           <tr>
               <td><strong>No. of Pre Fatigue Failures</strong><br/><input list="pltNoFailures" name="pltNoFailures"></td>
                   <datalist id="pltNoFailures">
                   <option value="None"/>
                   <option value="One"/>
                   <option value="Geater than One"/>
                   </datalist>
               <td><strong>Severity of Vibration</strong><br/><input list="pltSevVibration" name="pltSevVibration"></td>
                   <datalist id="pltSevVibration">
                   <option value="Minor"/>
                   <option value="Moderate"/>
                   <option value="Severe"/>
                   </datalist>
                   
               <td><strong>No. of weeks</strong><br/><input type="text" name="pltNoWeeks">
               <td><strong>Cyclic Type</strong><br/><input list="pltCycType" name="pltCycType"></td>
                   <datalist id="pltCycType">
                   <option value="Reciprocating Machinery"/>
                   <option value="PRV Chatter"/>
                   <option value="Valve with high pressure drop"/>
                   <option value="None"/>
                   </datalist>
           </tr>
           <tr>
               <td><strong>Corrective Action Take</strong><br/><input list="pltCorrAcTake" name="pltCorrAcTake"></td>
                   <datalist id="pltCorrAcTake">
                   <option value="Modification based on complete engineering analysis"/>
                   <option value="Modification based on experience"/>
                   <option value="No modification"/>
                   </datalist>
               <td><strong>Total Pipe Fitting</strong><br/><input type="text" name="pltTotalFitting">
               <td><strong>Type of Joint in This Piping</strong><br/><input list="pltTyThisPiping" name="pltTyThisPiping"></td>
                   <datalist id="pltTyThisPiping">
                   <option value="Threaded | Socketweld | Saddle on"/>
                   <option value="Saddle in fitting"/>
                   <option value="Piping tee | Weldolets"/>
                   <option value="Sweepolets"/>
                   </datalist>
               <td><strong>Condition of Pipe</strong><br/><input list="pltConPipe" name="pltConPipe"></td>
                   <datalist id="pltConPipe">
                   <option value="Missing or damaged supports - improper support"/>
                   <option value="Broken gussets - gussets welded directly to the pipe"/>
                   <option value="Good Condition"/>
                   </datalist>
                   
           </tr>
           <tr>
               <td><strong>Branch Diameter</strong><br/><input type="text" name="pltBraDiameter">
            </tr>
   </table>
        </fieldset>
    <input type="submit" value="Create New Plan" class="button" align="right">
</form>
<script>
    function validateForm() {
        var x = document.forms["newPlant"]["pltName"].value;
        if (x == "") {
            alert("Plant Name must be filled out");
            return false;
        }
    }
</script>