<head>
    <link rel="stylesheet" href="../../../../Public/css/home.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
</head>
<body>
<div>
   <form action="../../Controller/home/equipmentTempController.php" onSubmit="return validateForm()" name="plant" method="POST">
   <fieldset>
            <table>
            <legend><p><i><span style="color: red">Consequence Analysis </span></i></p></legend>
            <tr>
            <td><strong>Fluid</strong><br/><input list="pltFluid" name="pltFluid"></td>
                <datalist id="pltFluid">
                <option value="C1-C2"/>
                <option value="C3-C4"/>
                <option value="C5"/>
                <option value="C6-C8"/>
                <option value="C9-C12"/>
                <option value="C13-C16"/>
                <option value="C17-C25"/>
                <option value="C25+"/>
                <option value="Water"/>
                <option value="Steam"/>
                <option value="Acid"/>
                <option value="H2"/>
                <option value="H2S"/>
                <option value="HF"/>
                <option value="CO"/>
                <option value="DEE"/>
                <option value="HCL"/>
                <option value="Nitric Acid"/>
                <option value="ALCL3"/>
                <option value="NO2"/>
                <option value="Phosgene"/>
                <option value="TDI"/>
                <option value="Methanol"/>
                <option value="PO"/>
                <option value="Styrene(Aromatic)"/>
                <option value="EEA"/>
                <option value="EE"/>
                <option value="EG"/>
                <option value="EO"/>
                <option value="Pyrophoric"/>
               </datalist>
               <td><strong>Fluid Phase</strong><br/><input list="pltFPhase" name="pltFPhase"></td>
                   <datalist id="pltFPhase">
                   <option value="Gas"/>
                   <option value="Liquid"/>
                   </datalist>
               <td><strong>Fluid Type</strong><br/><input list="pltFType" name="pltFType"></td>
                   <datalist id="pltFType">
                   <option value="Type0"/>
                   <option value="Type1"/>
                   </datalist>
               <td><strong>Release Phase</strong><br/><input list="pltReleasePhase" name="pltReleasePhase"></td>
                   <datalist id="pltReleasePhase">
                   <option value="Liquid"/>
                   <option value="Vapor"/>
                   <option value="Gas"/>
                   </datalist>
                   </tr>
                   <tr>
                <td><strong>Detection Type</strong><br/><input type="text" name="pltDType"></td>
                <td><strong>Isolation Type</strong><br/><input type="text" name="pltIType"></td>
                <td><strong>Stored Pressure</strong><br/><input tupe="text" name="pltStoredPressure"></td>
                <td><strong>Atmospheric Pressure</strong><br/><input type="text" name=""></td>   
                </tr>
                <tr>
                <td><strong>Stored Temperature</strong><br/><input type="text" name="pltStoredTemperature"></td>
                <td><strong>Atmospheric Temperature</strong><br/><input type="text" name="pltAtmosphericTemperature"></td>
                <td><strong>Reynol Constant</strong><br/><input type="text" name="pltReynolConstant"></td>
                <td><strong>Fluid Mass</strong><br/><input type="text" name="pltFluidMass"></td>
                </tr>
                <tr>
                <td><strong>Component mass</strong><br/><input type="text" name="pltComponentmass"></td>
                <td><strong>Mitigation System</strong><br/><input type="text" name="pltMitigationSystem"></td>
                <td><strong>Toxic Percent</strong><br/><input type="text" name="pltToxicPercent"></td>
                <td><strong>Release Duration</strong><br/><input type="text" name="pltRelease Duration"></td>
                </tr>
                <tr>
                <td><strong>Non Toxic, Non Flamable Fluids</strong><br/><input list="pltNon" name="pltNon"></td>
                    <datalist id="pltNon">
                    <option value="Steam"/>
                    <option value="Acids"/>
                    <option value="Caustics"/>
                    </datalist>
                <td><strong>Outage Multiplier</strong><br/><input type="text" name="pltOutageMultiplier"></td>
                <td><strong>Production Cost</strong><br/><input type="text" name="pltProductionCost"></td>
                <td><strong>Injury Cost</strong><br/><input type="text" name="pltInjuryCost"></td>
                </tr>
                <tr>
                <td><strong>Environment Cost</strong><br/><input type="text" name="pltEnvironmentCost"></td>
                <td><strong>Population Density</strong><br/><input type="text" name="pltPopulationDensity"></td>
                <td><strong>EquipmentCost</strong><br/><input type="text" name="pltEquipmentCost"></td>
                
                </tr>
                <tr>
                <td><strong>Pool Fire Type</strong><br/><input list="pltPoolFireType" name="pltPoolFireType"></td>
                    <datalist id="pltPoolFireType">
                    <option value="Boiling"/>
                    <option value="Non-boiling"/>
                    </datalist>
                    
                <td><strong>Mass Fraction Liquid</strong><br/><input type="text" name="pltMassFractionLiquid"></td>
                <td><strong>Fraction of Fluid Flashed</strong><br/><input type="text" name="pltFFluidPhase"></td>
                <td><strong>Bubble Point Temperature</strong><br/><input type="text" name="pltBPointT"></td>
                </tr>
                <tr>
                <td><strong>Dew Point Temperature</strong><br/><input type="text" name="pltDPointT"></td>
                <td><strong>Time for Steady Release</strong><br/><input type="text" name="pltTSRelease"></td>
                <td><strong>Specific Heat</strong><br/><input type="text" name="pltSpecificHeat"></td>
                <td><strong>Mass of Flammable Material in Vapor Cloud</strong><br/><input type="text" name="pltMassFM"></td>
                </tr>
                <tr>
                <td><strong>Mass Fraction of Release Rate</strong><br/><input type="text" name="pltMassFR"></td>
                <td><strong>Volume of Liquid,[m3]</strong><br/><input type="text" name="pltVolume"></td>
                <td><strong>Bubble-Point Pressure,[kPa]</strong><br/><input type="text" name="pltBPPressure"></td>
                <td><strong>Wind Speed,[m/s]</strong><br/><input type="text" name="pltWindSpeed"></td>
                </tr>
                <tr>
                <td><strong>Area Surface Type</strong><br/><input list="pltAreaST" name="pltAreaST"></td>
                    <datalist id="pltAreaST">
                    <option value="Concrete"/>
                    <option value="Soil (average)"/>
                    <option value="Soil (moist_ 8%_water_sandy)"/>
                    <option value="Soil (sandy_dry)"/>
                    
                    </datalist>
                <td><strong>Ground Temperature,[K]</strong><br/><input type="text" name="ptlGroundT"></td>
                <td><strong>Ambient Condition</strong><br/><input list="pltAmbientCondition" name="pltAmbientCondition"></td>
                    <datalist id="pltAmbientCondition">
                    <option value="Ambient Temperature"/>
                    <option value="AIT"/>
                    </datalist>
                <td><strong>Humidity, [%]</strong><br/><input type="text" name="pltHumidity"></td>
                </tr>
                <tr>
                <td><strong>Mole Fraction of Release Rate</strong><br/><input type="text" name="pltMole"></td>
                <td><strong>Toxic Component</strong><br/><input list="pltToxicComponent" name="pltToxicComponent"></td>
                    <datalist id="pltToxicComponent">
                    <option value="Acrolein"/>
                    <option value="Acrylonitrile"/>
                    <option value="Aluminum Trichloride"/>
                    <option value="Ammonia"/>
                    <option value="Benzene"/>
                    <option value="Bromine"/>
                    <option value="Carbon Monoxide"/>
                    <option value="Carbon Tetrachloride"/>
                    <option value="Chlorine"/>
                    <option value="Ethylene Glycol Monoethyl Ether"/>
                    <option value="Ethylene Oxide"/>
                    <option value="Formaldehyde"/>
                    <option value="Hydrogen Chloride"/>
                    <option value="Hydrogen Cyanide"/>
                    <option value="Hydrogen Fluoride"/>
                    <option value="Hydrogen Sulfide"/>
                    <option value="Methanol"/>
                    <option value="Methyl Bromide"/>
                    <option value="Methyl Isocyanate"/>
                    <option value="Nitric Acid"/>
                    <option value="Nitrogen Dioxide"/>
                    <option value="Phosgene"/>
                    <option value="Propylene Oxide"/>
                    <option value="Styrene"/>
                    <option value="Sulphur Dioxide"/>
                    <option value="Toluene"/>
                    <option value="Toluene Diisocyanate"/>
                    </datalist>
                <td><strong>Criteria</strong><br/><input list="pltCriteria" name="pltCriteria"></td>
                    <datalist id="pltCriteria">
                    <option value="IDLH"/>
                    <option value="AEGL3-10"/>
                    <option value="AEGL3-30"/>
                    <option value="AEGL3-60"/>
                    <option value="EPA Toxic Endpoint"/>
                    <option value="ERPG-3"/>
                    </datalist>
                <td><strong>Grade Level Cloud</strong><br/><input type="text" name="pltGrade"></td>
                </tr>
                <tr>
                <td><strong>Represent Fluid</strong><br/><input list="pltRepresentFluid" name="pltRepresentFluid"></td>
                    <datalist id="pltRepresentFluid">
                    <option value="Steam"/>
                    <option value="Acids"/>
                    <option value="Caustic"/>
                    </datalist>
                <td><strong>Moles Flash From Liquid to Vapor</strong><br/><input type="text" name="pltMoles"></td>
                </tr>
                </table>
                </fieldset>
                <fieldset>
                <table>
                 <legend><p><i><span style="color: red">Atmospheric Storage Tank Shell Consequence </span></i></p></legend>
                <tr>
                <td><strong>Maximum Fill Height,[ft]</strong><br/><input type="text" name="pltMaximum"></td>
                <td><strong>Release Hole Size</strong><br/><input list="pltReleaseHoleSize" name="pltReleaseHoleSize"></td>
                     <datalist id="pltReleaseHoleSize">
                     <option value="Small"/>
                     <option value="Medium"/>
                     <option value="Large"/>
                     <option value="Rupture"/>
                     </datalist>
                <td><strong>Discharge Coefficient</strong><br/><input type="text" name="pltDischarge"></td>
                <td><strong>i_th Shell Course</strong><br/><input type="text" name="pltShellCourse"></td>
                </tr>
                <tr>
                <td><strong>Diameter of Tank,[ft]</strong><br/><input type="text" name="pltDiameter"></td>
                <td><strong>CHT</strong><br/><input type="text" name="pltCHT"></td>
                <td><strong>Environment Sensitivity</strong><br/><input list="pltESensitivity" name="pltESensitivity"></td>
                     <datalist id="pltESensitivity">
                     <option value="Low"/>
                     <option value="Medium"/>
                     <option value="High"/>
                     </datalist>
                <td><strong>Percentage of Fluid Leaving the Dike</strong><br/><input type="text" name="pltPFLDike"></td>
                </tr>
                <tr>
                <td><strong>Percent on-site,[%]</strong><br/><input type="text" name="pltPercenton"></td>
                <td><strong>Percent off-site,[%]</strong><br/><input type="text" name="pltPercentoff"></td>
                </tr>
                </table>
                </fieldset>
                <fieldset>
                <table>
                <legend><p><i><span style="color: red">Atmospheric Storage Tank Bottom Consequence </span></i></p></legend>
                <tr>
                <td><strong>Tank Type</strong><br/><input list="pltTankType" name="pltTankType"></td>
                    <datalist id="pltTankType">
                    <option value="Concrete | Asphalt"/>
                    <option value="With Release Prevention Barrier"/>
                    <option value="Without Release Prevention Barrier"/>
                    </datalist>
                <td><strong>Soil Hydraulic Conductivity,[ft/day]</strong><br/><input type="text" name="pltSoil"></td>
                <td><strong>Distance to the Groundwater Underneath the Tank,[ft]</strong><br/><input type="text" name="pltDistance"></td>
                </table>
                </fieldset>
                <fieldset>
                <table>
                <legend><p><i><span style="color: red">PoF Pressure Relief Devices</span></i></p></legend>
                <td><strong>Adjustment Factor for Conventional Valves</strong><br/><input list="pltAdj" name="pltAdj"></td>
                    <datalist id="pltAdj">
                    <option value="Closed System or Flare"/>
                    <option value="Other Cases"/>
                    </datalist>
               
                
               
                <td><strong>Overpressure,[kPa]</strong><br/><input type="text" name="pltOverpressure"></td>
                <td><strong>Maximum Allowable Working Pressure,[kPa]</strong><br/><input type="text" name="pltMAWP"></td>
                <td><strong>Adjustment Factor for Env Factors</strong><br/><input list="pltAFEF" name="pltAFEF"></td>
                    <datalist id="pltAFEF">
                    <option value="Operating Temperature 200<T<500F"/>
                    <option value="Operating Temperature > 500F"/>
                    <option value="Operating Ratio >90% for spring-loaded PRVs or >95% for pilot-operated PRVs"/>
                    <option value="Installed Piping Vibration"/>
                    <option value="Pulsating or Cyclical service, such as Downstream of Positive Displacement Rotating Equipment"/>
                    <option value="History of Excessive Actuation in Service (greater than 5 times per year)"/>
                    <option value="History of Chatter"/>
                    </datalist>
                    </tr>
                    <tr>
                <td><strong>Check is Pass?</strong><br/><input list="Check" name="Check"></td>
                    <datalist id="Check"/>
                    <option value="Yes"/>
                    <option value="No"/>
                    </datalist>
                
                <td><strong>Catalog Relief Device</strong><br/><input list="pltCRD" name="pltCRD"></td>
                    <datalist id="pltCRD">
                    <option value="Highly Effective"/>
                    <option value="Usually Effective"/>
                    <option value="Fairly Effective"/>
                    <option value="Poorly Effective"/>
                    <option value="Ineffective"/>
                    </datalist>
                <td><strong>Fluid Severity PoF</strong><br/><input list="pltFSPoF" name="pltFSPoF"></td>
                    <datalist id="pltFSPoF">
                    <option value="Mild"/>
                    <option value="Moderate"/>
                    <option value="Severe"/>
                    </datalist>
                <td><strong>Welbull PoF</strong><br/><input list="pltWelbullPoF" name="pltWelbullPoF"></td>
                    <datalist id="pltWelbullPoF">
                    <option value="Conventional and Balanced Bellows PRVs"/>
                    <option value="Pilot-Operated PRVs"/>
                    <option value="Rupture Disks"/>
                    </datalist>
                    </tr>
                    <tr>
                    
                <td><strong>Fluid Severity Leakage</strong><br/><input list="pltFSL" name="pltFSL"></td>
                    <datalist id="pltFSL">
                    <option value="Mild"/>
                    <option value="Moderate"/>
                    <option value="Severe"/>
                    </datalist>
               
                <td><strong>Weibull Leakage</strong><br/><input list="pltWeibullLeakage" name="pltWeibullLeakage"></td>
                    <datalist id="pltWeibullLeakage">
                    <option value="Conventional PRVs"/>
                    <option value="Balanced Bellows PRVs"/>
                    <option value="Pilot-Operated PRVs"/>
                    <option value="Rupture Disks"/>
                    </datalist>
                <td><strong>Total Demand Rate,[demands/year]</strong><br/><input type="text" name="pltTotal"></td>
                <td><strong>Adjustment Factor for the Presence of Soft Seats</strong><br/><input list="pltAFPSS" name="pltAFPSS"></td> 
                     <datalist id="pltAFPSS">
                     <option value="Soft Seated Design"/>
                     <option value="Other Cases"/>
                     </datalist>
                     </tr>
                  <tr>   
                <td><strong>IsLeakage?</strong><br/><input list="pltIsLeakage" name="pltIsLeakage"></td>
                     <datalist id="pltIsLeakage">
                     <option value="Yes"/>
                     <option value="No"/>
                     </datalist>
                     <td><strong>Level Leakage</strong><br/><input list="pltLevelLeakage" name="pltLevelLeakage"></td>
                         <datalist id="pltLevelLeakage">
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
                <legend><p><i><span style="color: red">CA for Pressure Relief Devices </span></i></p></legend>
                <tr> 
                <td><strong>Rated Capacity of a PRD,[lb/hr]</strong><input type="text" name="pltRated"></td>
                <td><strong>Time To Isolate[min]</strong><input type="text" name="pltTime"></td>
                <td><strong>The Fluid Costs [$/lb]</strong><input type="text" name="pltFluidCost"></td>
                <td><strong>PRD Inlet Size, [inches]</strong><input type="text" name="pltPRD"></td>
                </tr>
                <td><strong>PRDs Type</strong><br/><input list="pltPRDType" name="pltPRDType"></td>
                    <datalist id="pltPRDType">
                    <option value="Flare Or Closed System"/>
                    <option value="Atmosphere"/>
                    </datalist>
                <td><strong>Recovery Factor</strong><input list="pltRecoveryFactor" name="pltRecoveryFactor"></td>
                    <datalist id="pltRecoveryFactor">
                    <option value="PRD discharges to flare and a flare recovery system is installed"/>
                    <option value="PRD discharges to a closed system"/>
                    <option value="Other Cases"/>
                    </datalist>
                <td><strong>number of days required to shut a unit down,[days]</strong><input type="text" name="pltnumber"></td>
                <td><strong>Ignore Leakage?</strong><input list="pltIgnoreLeakage?" name="pltIgnoreLeakage?"></td>
                    <datalist id="pltIgnoreLeakage?">
                    <option value="Yes"/>
                    <option value="No"/>
                    </datalist>
                </tr>
                <tr>
                <td><strong>Unit Prod,[$/day]</strong><input type="text" name="pltUnit"></td>
                </tr>
                </table>
                </fieldset>
                <fieldset>
                <table>
                <legend><p><i><span style="color: red">CA of Heat Exchanger Tube Bundles</span></i></p></legend>
                <td><strong>Rate Reduction</strong><input type="text" name="pltRateReduction"></td>
                <td><strong>Maintenance Cost, [$]</strong><input type="text" name="pltMaintenanceCost">
                </td>
                </table>
                </fieldset>

                

                

           
                
                
                
                                
            </tr>
            </table>
            </fieldset>