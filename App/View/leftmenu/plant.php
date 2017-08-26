<head>
    <link rel="stylesheet" href="../../../../Public/css/home.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
</head>
<body>
<div>
   <form action="../../Controller/home/equipmentTempController.php" onSubmit="return validateForm()" name="plant" method="POST">
    <fieldset>
        <table>
            <legend>Plant information</legend>
            <tr>
                <td><strong>Plant </strong><input type="text" name="pltName"></td>
                <td><strong>Unit  </strong><input list="pltUnit" name="pltUnit"></td>
                <datalist id="pltUnit">
                   <option value="04" />
                   <option value="06" />
                   <option value="07" />
                   <option value="20" />
                   <option value="21" />
                   <option value="26" />
                   <option value="27" />
                   <option value="29" />
                   <option value="31" />
                   <option value="40" />
                   <option value="41" />
                   <option value="48" />
                   <option value="51" />
                   <option value="97" />
                   
                </datalist>
                <td><strong>EquipNum </strong><input type="text" name="pltEquipment"></td>
                <td><strong>Component </strong><input type="text" name="pltComponent"></td>
                </tr>
                <tr>
                <td><strong>Equipment Description </strong><input type="text" name="pltED"></td> 
                
               
                <td><strong>Type </strong><input list="pltType" name ="pltType"></td>
                <datalist id="pltType">
                   <option value="Atmospheric Storage Tank"/>
                   <option value="Boiler"/>
                   <option value="Bullet"/>
                   <option value="Column"/>
                   <option value="Compressor Bottle"/>
                   <option value="Drum"/>
                   <option value="Filter"/>
                   <option value="Fired Heater"/>
                   <option value="Heat Exchanger"/>
                   <option value="Heater"/>
                   <option value="Horizontal . Drum"/>
                   <option value="Horizontal Drum"/>
                   <option value="Hoz. Drum"/>
                   <option value="Injection Joint"/>
                   <option value="Injection Nozzle"/>
                   <option value="Inventory"/>
                   <option value="Missing SC"/>
                   <option value="Once Trough Heat Exchanger"/>
                   <option value="Pressure Vessel"/>
                   <option value="Reactor"/>
                   <option value="Sphere"/>
                   <option value="Tank"/>
                   <option value="Tower"/>
                   <option value="U-Tube Heat Exchanger"/>
                   <option value="Vertical Drum"/>
                   </datalist>
                  <td><strong>Sub Component</strong><input list="pltSub" name="pltSub"></td>
                  <datalist id="pltSub">
                    <option value="Boot"/>
                    <option value="Bottom"/>
                    <option value="Bottom (Desalter Water)"/>
                    <option value="Caustic Piping"/>
                    <option value="Convection Tubes"/>
                    <option value="Cooling Water Piping"/>
                    <option value="Crossover Tubes"/>
                    <option value="Desalted Crude Piping"/>
                    <option value="Desalter Water Piping"/>
                    <option value="Desalter Water Volume"/>
                    <option value="Diesel Product Piping"/>
                    <option value="Diesel Trays"/>
                    <option value="Distillate Trays"/>
                    <option value="Floor"/>
                    <option value="Fuel Gas Piping"/>
                    <option value="Fuel Oil Piping"/>
                    <option value="Gas Oil Trays"/>
                    <option value="Header Box"/>
                    <option value="Heavy Crude Piping"/>
                    <option value="Heavy Naphtha Piping"/>
                    <option value="Heavy Naphtha Trays"/>
                    <option value="HVGO Piping"/>
                    <option value="Injection Point"/>
                    <option value="Jacket"/>
                    <option value="Light Naphtha Piping"/>
                    <option value="Light S.R Naphtha Piping"/>
                    <option value="Liquid HCs Piping"/>
                    <option value="LPG Piping"/>
                    <option value="LVGO Piping"/>
                    <option value="Middle"/>
                    <option value="Naphtha Piping"/>
                    <option value="Naphtha Trays"/>
                    <option value="Natural Gas Piping"/>
                    <option value="No Sub Component"/>
                    <option value="Nozzle"/>
                    <option value="Off Gas Piping"/>
                    <option value="Piping and Headers"/>
                    <option value="Pressure Boundary"/>
                    <option value="Pump Out Slop Piping"/>
                    <option value="Radiant Tubes"/>
                    <option value="Reduced Crude Piping"/>
                    <option value="Relief/Flare Piping"/>
                    <option value="Rerun Material Piping"/>
                    <option value="Roof"/>
                    <option value="S.R. Distillate Piping"/>
                    <option value="S.R. Naphtha/Gasoline"/>
                    <option value="Shell"/>
                    <option value="Shell Casing"/>
                    <option value="Sides"/>
                    <option value="Sour Water Piping"/>
                    <option value="Steam Piping"/>
                    <option value="Top"/>
                    <option value="Tray"/>
                    <option value="Tube"/>        
                    <option value="Tube Sheet"/>
                    <option value="Vacuum Bottom Piping"/>
                    <option value="Vacuum Feed"/>
                    <option value="Vacuum Feed Piping"/>  
                    <option value="Wetting Agent Piping"/>
                  </datalist>
                  <td><strong>SubComp Description </strong><input type="text" name="pltSubCop"></td>
                  </tr>
                  <tr>
                  <td><strong>Material of Construction</strong><input list="pltMOC" name="pltMOC"></td>
                  <datalist id="pltMOC">
                     <option value="04-03-520"/>
                     <option value="09-P232"/>
                     <option value="1 1/4 Cr - 1/2 Mo"/>
                     <option value="1 Cr - 1/2 Mo"/>
                     <option value="1.4541 (321 Series Stainless Steel)"/>
                     <option value="1.4786 (Alloy 800H"/>
                     <option value="1.4941 (Type 321 SS)"/>
                     <option value="10 Cr MO 910"/>
                     <option value="10 Cr MO 910 (ASTM A387 Grade 22) 2.25 CR, 1 Mo"/>
                     <option value="12 Cr"/>
                     <option value="13 Cr Mo 44 HII"/>
                     <option value="15 MO 3"/>
                     <option value="15 MO 3 (0.3 Mo Steel)"/>
                     <option value="15CrNiMo 1810 (A-312 TP316)"/>
                     <option value="16 MO 3"/>
                     <option value="16 MO 5"/>
                     <option value="16 MO 5 (0.5 Mo Alloy Steel)"/>
                     <option value="17 Mn 4"/>
                     <option value="2 1/4 Cr - 1 Mo"/>
                     <option value="25-03-016A-D"/>
                     <option value="3 Cr - 1 Mo"/>
                     <option value="300 Series H Grade Stainless Steel"/>
                     <option value="300 Series L Grade Stainless Steel"/>
                     <option value="300 Series Stainless Steel"/>
                     <option value="304 Series Stainless Steel"/>
                     <option value="310 Series Stainless Steel"/>
                     <option value="316 Series Stainless Steel"/>
                     <option value="316 Series Stainless Steel w/ < 2.5"/>
                     <option value="316 Series Stainless Steel w/ > 2.5"/>
                     <option value="316L Stainless Steel"/>
                     <option value="317 Series Stainless Steel"/>
                     <option value="321 Series Stainless Steel"/>
                     <option value="347 Series Stainless Steel"/>
                     <option value="5 Cr - 1/2 Mo"/>
                     <option value="5 Cr - 1/2 Mo - Si"/>
                     <option value="7 Cr - 1/2 Mo"/>
                     <option value="9 Cr - 1 Mo"/>
                     <option value="9Cr-1Mo"/>
                     <option value="A106-B"/>
                     <option value="A106-B (Sour)"/>
                     <option value="A106-B Galv."/>
                     <option value="A-285 C"/>
                     <option value="A312 Gr TP 321 or 347"/>
                     <option value="A312 TP321 or 347"/>
                     <option value="A312-TP316"/>
                     <option value="A-335 P5"/>
                     <option value="A-335 P9"/>
                     <option value="A335-P11"/>
                     <option value="A671-CC65 CL 32 EFW"/>
                     <option value="A671-CC65 CL 32 EFW (Sour)"/>
                     <option value="Admiralty Brass"/>
                     <option value="Alloy 20"/>
                     <option value="Alloy 400"/>
                     <option value="Alloy 600"/>
                     <option value="Alloy 625"/>
                     <option value="Alloy 800"/>
                     <option value="Alloy 800H"/>
                     <option value="Alloy 825"/>
                     <option value="Alloy B-2"/>
                     <option value="Alloy C-276"/>
                     <option value="AlMnCu (41/03 +Cu)"/>
                     <option value="Assumed X5CrNiMo 1810 (A-312 TP316)"/>
                     <option value="ASTM A 216"/>
                     <option value="Austenitic Stainless Steel"/>
                     <option value="C22.8"/>
                     <option value="Carbon - 1/2 Mo (Annealed)"/>
                     <option value="Carbon - 1/2 Mo (Normalized)"/>
                     <option value="Carbon Steel"/>
                     <option value="Carbon Steel (Norm.)"/>
                     <option value="CF5K"/>
                     <option value="Class KV610 (Aluminum)"/>
                     <option value="Class KV611 (Aluminum"/>
                     <option value="Class SS 15 (304 SS)"/>
                     <option value="Class SS 60 (304 SS)"/>
                     <option value="Class SS15 (304 SS)"/>
                     <option value="Copper Alloy"/>
                     <option value="DIN 1.4541 (SA 213 Tp.321)"/>
                     <option value="DIN 1.4919"/>
                     <option value="DIN 2248"/>
                     <option value="EN AW-5083-0"/>
                     <option value="EN AW-5086 (Aluminum)"/>
                     <option value="Ferritic Stainless Steel"/>
                     <option value="H II"/>
                     <option value="Heavy metals. Assumed H2S: 3%vol"/>
                     <option value="High Cr (>13%) Ferritic Stainless S"/>
                     <option value="KCS"/>
                     <option value="Low Alloy Steel"/> 
                     <option value="Martensite Stainless Steel"/>
                     <option value="Monel"/>
                     <option value="Nickel Alloy"/>
                     <option value="Other"/>
                     <option value="P235GH-TCI"/>
                     <option value="P265GH"/>
                     <option value="P355NH"/>
                     <option value="RS-1372"/>
                     <option value="RS-137-2"/>
                     <option value="RSt-35.8"/>
                     <option value="RSt-35.8 I"/>
                     <option value="RSt-35.8i"/>
                     <option value="RSt-37-2"/>
                     <option value="SA 106 B"/>
                     <option value="SA 106 Gr B"/>
                     <option value="SA 179"/>
                     <option value="SA 213 Tp.304L"/>
                     <option value="SA 213 Tp.316L"/>
                     <option value="SA 213 Tp.347"/>
                     <option value="SA 240 316"/>
                     <option value="SA 266 Gr 2"/>
                     <option value="SA 312 TP 316L"/>
                     <option value="SA 335 P11"/>
                     <option value="SA 336 F11 Cl. 2"/>
                     <option value="SA 387 GR.11 Cl.2"/>
                     <option value="SA 387 GR.22 CL.2"/>
                     <option value="SA 516 60"/>
                     <option value="SA 516 60 N"/>
                     <option value="SA 516 70"/>
                     <option value="SA 516 70N"/>
                     <option value="SA 516 Gr. 60"/>
                     <option value="SA 789 2205 Duple"/>
                     <option value="SA106 B"/>
                     <option value="SA-106B"/>
                     <option value="SA-179"/>
                     <option value="SA-240 316L"/>
                     <option value="SA-240 TP 316L"/>
                     <option value="SA-336 F Cl 3"/>
                     <option value="SA-387 Gr.11 Cl.1"/>
                     <option value="SA-387 Gr.22 Cl.2"/>
                     <option value="SA-516-70"/>
                     <option value="SA-516-70 PVQ"/>
                     <option value="SA-516-70N"/>
                     <option value="SA-516-GR.65N"/>
                     <option value="SB 169 UNS C 61400">
                     <option value="SB 171 C61400"/>
                     <option value="SB 265 Gr.2"/>
                     <option value="SG-NiCr20Nb"/>
                     <option value="St 35.4"/>
                     <option value="St 35.8"/>
                     <option value="St 35.8 (A-106A)"/>
                     <option value="St 35.8/III"/>
                     <option value="St 35.8I"/>
                     <option value="St 35.8I (A-106A)"/>
                     <option value="St 37-0"/>
                     <option value="St 38.5"/>
                     <option value="St 45.8 III"/>
                     <option value="St 45.8 III(U-bends 15 MO 3)"/>
                     <option value="St. 35.8 III"/>
                     <option value="St. 35.8 III C22.8"/>
                     <option value="St. 45.8"/>
                     <option value="TT STE 39"/>
                     <option value="WSTE-355"/>
                     <option value="WSTE-36"/>
                     <option value="X5 Cr NI 189"/>
                     <option value="X5CrNiMo 1810 (A-312 TP316)"/>
                     <option value="X6 Cr NI MO 17 13"/>
                     <option value="X6CrNiMo1713 (SA 240 Tp.316)"/>
             </datalist>
             <td><strong>Liner MOC</strong><input list="pltLMOC" name="pltLMOC"/></td>
             <datalist id="pltLMOC">
                     <option value="304 SS Clad"/>
                     <option value="304SS"/>
                     <option value="Acid Brick"/>
                     <option value="Castable Refractory"/>
                     <option value="Glass Lined"/>
                     <option value="Hastelloy C276"/>
                     <option value="Inconel"/>
                     <option value="Monel"/>
                     <option value="None"/>
                     <option value="Organic Coating"/>
                     <option value="Refractory"/>
                     <option value="Stainless Steel"/>
                     <option value="Strip Lined Alloy"/>
                     <option value="Weld Overlay Cladding"/>
               </datalist> 
               
               
               <td><strong>Height Length(m)</strong><input type="text" name="pltHL"></td>
               <td><strong>Diameter(m)</strong> <input type="text" name="pltDia"></td>  
               </tr>
               <tr> 
               <td><strong>Nominal Thickness</strong> <input type="text" name="pltNominal"></td>
               <td><strong>CA (mm)</strong> <input type="text" name="pltCA"></td>
               <td><strong>Design Temp</strong><input type="text" name="pltTemp"></td>
               </tr>
                 
            
            
            
            
            
            
            
            
            
            
            
            
            
          </tr>
        </table>
    </fieldset>
    
    </form>
    </div>
    </body>
    