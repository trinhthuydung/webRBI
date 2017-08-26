<head>
    <link rel="stylesheet" href="../../../../Public/css/home.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
</head>
<body>
<div>
   <form action="../../Controller/home/equipmentTempController.php" onSubmit="return validateForm()" name="plant" method="POST">
   <fieldset>
            <table>
            <legend><p><i><span style="color: red">Values</span></i></p></legend>
            <tr>
                <td><strong>Test Pressure (barg) </strong><input type="text" name="pltTestPress"></td>
                <td><strong>MDMT, C </strong><input type="text" name="pltMDMT"></td>
                
                <td><strong>In Service? </strong><input list="pltInService" name="pltInService">
                    <datalist id="pltInService">
                        <option value="Yes"/>
                        <option value="No"/>
                    </datalist> 
                </td>
                <td><strong>Service Date </strong><br/><input type="date" name="pltServiceDate"/></td>
            </tr>
            <tr>
                <td><strong>LDTBXH Covered?</strong><br/><input list="pltLDTBXHCovered" name="pltLDTBXHCovered">
                <datalist id="pltLDTBXHCovered">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist> 
                </td>
                
                <td><strong>Insulated? </strong><br/><input list="pltInsulated" name="pltInsulated">
                <datalist id="pltInsulated">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist> 
                
                <td><strong>PWHT? </strong><br/><input list="pltPWHT" name="pltPWHT">
                <datalist id="pltPWHT">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
                
                <td><strong>Last Internal Inspection Date</strong><br/><input type="date" name="pltLIIDate"></td>
            </tr>  
            <tr>
                <td><strong>Insulation Type </strong><br/><input type="text" name="pltInsType"></td>                
                <td><strong>Operating State </strong><br/><input list="pltOperatingState" name="pltOperatingState">
                <datalist id="pltOperatingState">
                    <option value="liquid"/>
                    <option value="vapor"/>
                    <option value="Mixed Liquid/Vapor"/>
                    <option value="slurry"/>
                </datalist> 
                
                <td><strong>Inventory Liquid (lbs)</strong><br/><input type="text" name="pltInventoryLiquid"></td>
                <td><strong>Inventory Vapor (lbs)</strong><br/><input type="text" name="pltInventoryVapor"></td>
            </tr>
            <tr>
                <td><strong>Inventory Total (lb)</strong><br/><input type="text" name="pltInventoryTotal"></td>                
                <td><strong>Confident In Stream Analysis? </strong><br/><input list="pltCISA" name="pltCISA">
                <datalist id="pltCISA">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist> 
                <td><strong>Vapor Density < Air? </strong><br/><input list="pltVapDenAir" name="pltVapDenAir">
                <datalist id="pltVapDenAir">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
                <td><strong>Corrosion Inhibitors? </strong><input list="pltCorInh" name="pltCorInh">
                <datalist id="pltCorInh">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
            </tr>
            <tr>
                <td><strong>Frequent Feed Changed? </strong><br/><input list="pltFFC" name="pltFFC">
                <datalist id="pltFFC">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>                 
                <td><strong>Major Chemicals (with %weight) </strong><br/><input type="text" name="pltMajChem">
                <td><strong>Contaminants</strong><br/><input list="pltContaminants" name="pltContaminants"></td>
                    <datalist id="pltContaminants">
                    <option value="Amine (%)"/>
                    <option value="Amine Loading (% H2S/%CO2)"/>
                    <option value="Amine Type (MEA/DEA/etc.)"/>
                    <option value="Caustic (%)"/>
                    <option value="Caustic Injection (Yes/No)"/>
                    <option value="Chemical"/>
                    <option value="Chlorides (%)"/>
                    <option value="Crude Fraction Neut Number"/>
                    <option value="Crude Fraction Sulfur Content (%)"/>
                    <option value="Cyanides (Yes/No)"/>
                    <option value="Filming Amine Injection (Yes/No)"/>
                    <option value="H2 Partial Pressure (psia)"/>
                    <option value="H2S (%)"/>
                    <option value="H2S (ppm in water)"/>
                    <option value="H2S Partial Pressure (psia)"/>
                    <option value="HCl (%)"/>
                    <option value="HF Acid (%)"/>
                    <option value="Hydrogen absorption Injection Inhibitor"/>
                    <option value="Neutralizing Amine Injection (Yes/No)"/>
                    <option value="NH3 (%)"/>
                    <option value="NH3 (ppm in water)"/>
                    <option value="Polysulfide Injection (Yes/No)"/>
                    <option value="Sulfuric Acid (%)"/>
                    <option value="Water Content (%/pH)"/>
                    <option value="Water Wash/Injection (Yes/No)"/>
                    </datalist>
                <td><strong>Online Monitoring? </strong><br/><input list="pltOnlMon" name="pltOnlMon">
                <datalist id="pltOnlMon">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
            </tr>
            <tr>
                <td><strong>Cathodic Protection? </strong><br/><input list="pltCatPro" name="pltCatPro">
                <datalist id="pltCatPro">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
                <td><strong>Corrosion Monitoring? </strong><br/><input list="pltCorMon" name="pltCorMon">
                <datalist id="pltCorMon">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
                <td><strong>OH Calib Up to Date? </strong><br/><input list="pltOHC" name="pltOHC">
                <datalist id="pltOHC">
                    <option value="Yes"/>
                    <option value="No"/>
                </datalist>
                <td><strong>Dist From Facility</strong><br/><input type="text" name="pltDFF">
            </tr>
            <tr>
                <td><strong>Equip Count</strong><br/><input type="text" name="pltEqCou">
                <td><strong>HAZOP Rating</strong><br/><input type="text" name="pltHAZOPRat">
                <td><strong>Personnel Density</strong><br/><input type="text" name="pltPerDen">
                <td><strong>Mitigation Equip</strong><br/><input type="text" name="pltMitEqu">
            </tr>
            <tr>
                <td><strong>Env Rating</strong><br/><input type="text" name="pltEnvRat">
                <td><strong>Insp Tech Used </strong><br/><input list="pltITU" name="pltITU">
                <datalist id="pltITU">
                    <option value="Acoustic Emission"/>
                    <option value="Combination of Visual Inspections in accordance with procedure 1211105, and UT thickness measurements by SGS"/>
                    <option value="Dimensional Measurements"/>
                    <option value="Dye Penetrant"/>
                    <option value="Eddy Current"/>
                    <option value="Fluorescent Magnetic Particle & UT Thickness Measurements"/>
                    <option value="Flux Leakage"/>
                    <option value="Flux leakage eddy current"/>
                    <option value="Metalography"/>
                    <option value="None"/>
                    <option value="Radiography"/>
                    <option value="Ultrasonic Shear Wave"/>
                    <option value="Ultrasonic Straight Beam"/>
                    <option value="Visual Examination"/>
                   
                </datalist>
                <td><strong>Equip Modifications/Repairs</strong><br/><input type="text" name="pltEMR">
                <td><strong>Inspection Findings</strong><br/><input type="text" name="pltInsFin">
            </tr>
            <tr>
                <td><strong>Vapor Density, kg/m3</strong><br/><input type="text" name="pltVapDen">
                <td><strong>Liquid Density kg/m3</strong><br/><input type="text" name="pltLiqDen">
                <td><strong>Vapor, kg</strong><br/><input type="text" name="pltVapor">
                <td><strong>Liquid, kg</strong><br/><input type="text" name="pltLiquid">
            </tr>
            <tr>
                <td><strong>HMBPFDNum</strong><br/><input type="text" name="pltHMBPFDNum">
                <td><strong>PIDNum</strong><br/><input type="text" name="pltPIDNum">
                <td><strong>Service</strong><br/><input type="text" name="pltService">
                <td><strong>HMB Stream#</strong><br/><input type="text" name="pltHMBStream">
            </tr>
            <tr>