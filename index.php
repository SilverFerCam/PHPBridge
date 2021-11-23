<!--Bridge Quick Scan SilverStorm-->
<!--Desarrollado por David Fernandez-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bridge Quick Scan</title>
    <link rel="shortcut icon" href="img/favicon.png"/>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
</head>
<body>
    <div class="barra">
        <a href="https://silver-storm.com/"><img src="img/SilverLogo5.png" class="logo"></a>
        <a class="derecha">Digital Tranformation Roadmap Quick Scan</a>
    </div>
    <div id="graph" class="grafico">
        <canvas id="myChart" width="400" height="400" position="relative"></canvas>
    </div>    
    <div class="cuestionario" id="quiz">
        <form>
            <!--Pregunta 1-->
            <div id="p1" class="p1 pregunta">
                <h3>1. To what extent are you aware of the organizational values and principles in your area?</h3>
                <div class="respuestas">
                    <input type="radio" id="p1-1" name="p1" value="1">
                    <label for="p1-1">I am not aware of any organizational values and principles. I focus on my daily work which I need to perform.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p1-2" name="p1" value="3">
                    <label for="p1-2">I am aware of organizational values and principles, but I don´t know how my daily work is aligned to these.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p1-3" name="p1" value="5">
                    <label for="p1-3">I am aware of the organizational values and principles and I constantly check that my daily work is aligned with these.</label>
                </div>
            </div>
            <!--Pregunta 2-->
            <div id="p2" class="p2 pregunta">
                <h3>2. What is your level of engagement with the business/customer your IT services support?</h3>
                <div class="respuestas">
                    <input type="radio" id="p2-1" name="p2" value="1">
                    <label for="p2-1">We have a limited level of engagement with the business.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p2-2" name="p2" value="3">
                    <label for="p2-2">We have a good level of engagement with the business.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p2-3" name="p2" value="5">
                    <label for="p2-3">We have a high level of engagement with the business.</label>
                </div>
            </div>
            <!--Pregunta 3-->
            <div id="p3" class="p3 pregunta">
                <h3>3. My organization continually align operations with the strategic direction set by the governing body.</h3>
                <div class="respuestas">
                    <input type="radio" id="p3-1" name="p3" value="1">
                    <label for="p3-1">I am not aware of any strategy direction alignment between my organization and its governing body.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p3-2" name="p3" value="3">
                    <label for="p3-2">I am aware of sporadic and uni-directional strategy direction alignments between my organization and its governing body.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p3-3" name="p3" value="5">
                    <label for="p3-3">I am aware of regular and bi-directional strategy direction alignments between my organization and its governing body.</label>
                </div>
            </div>
            <!--Pregunta 4-->
            <div id="p4" class="p4 pregunta">
                <h3>4. My organization adopts and applies governance framework and practices.</h3>
                <div class="respuestas">
                    <input type="radio" id="p4-1" name="p4" value="1">
                    <label for="p4-1">I have no experience on any governance framework applied in my organization.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p4-2" name="p4" value="3">
                    <label for="p4-2">I have moderate experience - my team knows about company´s governance framework but not applied it in our daily work.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p4-3" name="p4" value="5">
                    <label for="p4-3">I have extensive experience - my team knows about company's governance framework and applies these whenever applicable.</label>
                </div>
            </div>
            <!--Pregunta 5-->
            <div id="p5" class="p5 pregunta">
                <h3>5. To what extent are you aware of strategic plans, portfolio and enterprise architecture in your organization?</h3>
                <div class="respuestas">
                    <input type="radio" id="p5-1" name="p5" value="1">
                    <label for="p5-1">I am not aware of any strategic plans, portfolio or enterprise architecture (standards).</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p5-2" name="p5" value="3">
                    <label for="p5-2">I am aware of at least one of the three components mentioned (strategic plans, portfolio and enterprise architecture).</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p5-3" name="p5" value="5">
                    <label for="p5-3">I am aware of all three components mentioned (strategic plans, portfolio and enterprise architecture).</label>
                </div>
            </div>
            <!--Pregunta 6-->
            <div id="p6" class="p6 pregunta">
                <h3>6. What is your level of engagement with key stakeholders and building up a relationship with these?</h3>
                <div class="respuestas">
                    <input type="radio" id="p6-1" name="p6" value="1">
                    <label for="p6-1">We have a limited level of engagement with our key stakeholders.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p6-2" name="p6" value="3">
                    <label for="p6-2">We have a good level of engagement and a good relationship with key stakeholders. </label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p6-3" name="p6" value="5">
                    <label for="p6-3">We have a high level of engagement an excellent relationship with key stakeholders. </label>
                </div>
            </div>
            <!--Pregunta 7-->
            <div id="p7" class="p7 pregunta">
                <h3>7. To what extent do you ensure that your IT products meet stakeholder expectations for quality, costs and time to market?</h3>
                <div class="respuestas">
                    <input type="radio" id="p7-1" name="p7" value="1">
                    <label for="p7-1">Limited extent - we focus primarily on meeting cost expectations.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p7-2" name="p7" value="3">
                    <label for="p7-2">Good extent - we typically ensure we meet expectations for costs and quality.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p7-3" name="p7" value="5">
                    <label for="p7-3">High extent - we regularly ensure meeting expectations for quality, costs and time-to-market.</label>
                </div>
            </div>
            <!--Pregunta 8-->
            <div id="p8" class="p8 pregunta">
                <h3>8. My team can always ensure that all IT service components are available at the right place and at the right moment, in the right quality.</h3>
                <div class="respuestas">
                    <input type="radio" id="p8-1" name="p8" value="1">
                    <label for="p8-1">Partially true - IT service components are at the right place most of the time.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p8-2" name="p8" value="3">
                    <label for="p8-2">True - IT service components are at the right place and at the right moment, although quality may vary.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p8-3" name="p8" value="5">
                    <label for="p8-3">True - IT service components are available covering the three key aspects (place, timing and quality).</label>
                </div>
            </div>
            <!--Pregunta 9-->
            <div id="p9" class="p9 pregunta">
                <h3>9. My services are always delivered and supported according to agreed specifications and stakeholder expectations.</h3>
                <div class="respuestas">
                    <input type="radio" id="p9-1" name="p9" value="1">
                    <label for="p9-1">My team does not apply specifications and mapping of stakeholder expectations when delivering our services.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p9-2" name="p9" value="3">
                    <label for="p9-2">My team applies specifications when delivering our services, though no mapping with stakeholder expectations.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p9-3" name="p9" value="5">
                    <label for="p9-3">My team continuously applies both agreed specifications and mapping to stakeholder expectations when delivering our services.</label>
                </div>
            </div>
            <!--Pregunta 10-->
            <div id="p10" class="p10 pregunta">
                <h3>10. What is your level of engagement with improvement initiatives, plans and status reports?</h3>
                <div class="respuestas">
                    <input type="radio" id="p10-1" name="p10" value="1">
                    <label for="p10-1">We have a limited level of engagement when it comes to improvement initiatives.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p10-2" name="p10" value="3">
                    <label for="p10-2">We have a good level of engagement with annual/occasional improvement initiatives.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p10-3" name="p10" value="5">
                    <label for="p10-3">We have a high level of engagement with regular (continuous) improvement initiatives.</label>
                </div>
            </div>
            <!--Pregunta 11-->
            <div id="p11" class="p11 pregunta">
                <h3>11. Information Security: To what extent are security, risk & compliance integrated in your way of working?</h3>
                <div class="respuestas">
                    <input type="radio" id="p11-1" name="p11" value="1">
                    <label for="p11-1">I am frequently confronted and even overwhelmed with security, risk and compliance issues.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p11-2" name="p11" value="3">
                    <label for="p11-2">I ensure that security, risk and compliance are part of my work and I know where to find guidance outside my team if required.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p11-3" name="p11" value="5">
                    <label for="p11-3">I take responsibility for security, risk and compliance within our team; these are fully integrated when we deliver an IT service.</label>
                </div>
            </div>
            <!--Pregunta 12-->
            <div id="p12" class="p12 pregunta">
                <h3>12. Supplier Mgmt: To what extent are key suppliers managed appropriately to support the seamless provision of quality products and services?</h3>
                <div class="respuestas">
                    <input type="radio" id="p12-1" name="p12" value="1">
                    <label for="p12-1">We have a limited and mostly reactive management of key suppliers.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p12-2" name="p12" value="3">
                    <label for="p12-2">We have a good and dedicated management of key suppliers.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p12-3" name="p12" value="5">
                    <label for="p12-3">We have a very good, dedicated and proactive management of key suppliers.</label>
                </div>
            </div>
            <!--Pregunta 13-->
            <div id="p13" class="p13 pregunta">
                <h3>13. Change Control: The count of IT changes that are assessed, authorized, scheduled and completed, is regularly maximized.</h3>
                <div class="respuestas">
                    <input type="radio" id="p13-1" name="p13" value="1">
                    <label for="p13-1">Partially true - our changes are always completed but often with conflicts in assessment, authorization or scheduling.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p13-2" name="p13" value="3">
                    <label for="p13-2">True - our changes are completely managed, even if the responsible team has to interve often manually.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p13-3" name="p13" value="5">
                    <label for="p13-3">True - our changes are completely managed, and most of the change control activities are automated.</label>
                </div>
            </div>
            <!--Pregunta 14-->
            <div id="p14" class="p14 pregunta">
                <h3>14. Incident Management: To what extent incidents disrupt normal service operations in daily business?</h3>
                <div class="respuestas">
                    <input type="radio" id="p14-1" name="p14" value="1">
                    <label for="p14-1">Quite often.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p14-2" name="p14" value="3">
                    <label for="p14-2">Rarely.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p14-3" name="p14" value="5">
                    <label for="p14-3">Almost never.</label>
                </div>
            </div>
            <!--Pregunta 15-->
            <div id="p15" class="p15 pregunta">
                <h3>15. IT Asset Management: What is the level of planning and management of the full lifecycle of IT assets?</h3>
                <div class="respuestas">
                    <input type="radio" id="p15-1" name="p15" value="1">
                    <label for="p15-1">We have a low level of planning and management when it comes to IT asset management.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p15-2" name="p15" value="3">
                    <label for="p15-2">We have a medium level of planning and management when it comes to IT asset management.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p15-3" name="p15" value="5">
                    <label for="p15-3">We have a high level of planning and management when it comes to IT asset management.</label>
                </div>
            </div>
            <!--Pregunta 16-->
            <div id="p16" class="p16 pregunta">
                <h3>16. Problem Management: Ocurrence and impact of incidents is drastically reduced by regular analysis of repeating patterns and managing workarounds.</h3>
                <div class="respuestas">
                    <input type="radio" id="p16-1" name="p16" value="1">
                    <label for="p16-1">Partially true - repeating patterns and managing workaround might be  discovered and re-applied ad-hoc during incident solution.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p16-2" name="p16" value="3">
                    <label for="p16-2">True - our team has limited experience with analysis of repeating patterns and managing workarounds in daily operations.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p16-3" name="p16" value="5">
                    <label for="p16-3">True - our team regularly applies proven experience when it comes to repeating patterns and managing workarounds in daily operations.</label>
                </div>
            </div>
            <!--Pregunta 17-->
            <div id="p17" class="p17 pregunta">
                <h3>17. Service Configuration Management: To what extent is accurate and reliable information about the service configuration available?</h3>
                <div class="respuestas">
                    <input type="radio" id="p17-1" name="p17" value="1">
                    <label for="p17-1">I am not aware of any accurate and reliable information available. (about the service configuration)</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p17-2" name="p17" value="3">
                    <label for="p17-2">I have seen partially accurate and reliable information available.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p17-3" name="p17" value="5">
                    <label for="p17-3">I am aware of a complete and fully integrated accurate and reliable information is available.</label>
                </div>
            </div>
            <!--Pregunta 18-->
            <div id="p18" class="p18 pregunta">
                <h3>18. Service Desk: To what extent are incident tickets and service requests captured, owned and actioned?</h3>
                <div class="respuestas">
                    <input type="radio" id="p18-1" name="p18" value="1">
                    <label for="p18-1">Partially - our service desk captures most of the incidents and service requests.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p18-2" name="p18" value="3">
                    <label for="p18-2">Completely, but manually - our service desk captures all incidents and service requests and acts on these in mostly manual processes.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p18-3" name="p18" value="5">
                    <label for="p18-3">Completely and mostly automated.</label>
                </div>
            </div>
            <!--Pregunta 19-->
            <div id="p19" class="p19 pregunta">
                <h3>19. Deployment Management: To what extent does my organization apply guidelines to move new or changed software or other components to live environments?</h3>
                <div class="respuestas">
                    <input type="radio" id="p19-1" name="p19" value="1">
                    <label for="p19-1">I have no experience applying guidelines related to new or changed software deployment.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p19-2" name="p19" value="3">
                    <label for="p19-2">I have limited experience in applying guidelines related to new or changed software deployment.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p19-3" name="p19" value="5">
                    <label for="p19-3">I have proven experience in applying guidelines related to new or changed software deployment.</label>
                </div>
            </div>
            <!--Pregunta 20-->
            <div id="p20" class="p20 pregunta">
                <h3>20. To what extent does my organization apply improvement methodologies, culture and technques, in alignment with our strategic objectives?</h3>
                <div class="respuestas">
                    <input type="radio" id="p20-1" name="p20" value="1">
                    <label for="p20-1">We do not apply any of these - if problems appear, we handle them on an ad-hoc basis.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p20-2" name="p20" value="3">
                    <label for="p20-2">There are improvement methodologies applied by a central team that interacts with us every once in a while.</label>
                </div>
                <div class="respuestas">
                    <input type="radio" id="p20-3" name="p20" value="5">
                    <label for="p20-3">My team actively applies improvement methodologies on a regular basis (e.g. weekly basis). We strive to develop a culture of continuous improvement.</label>
                </div>
            </div>
        </form>
        <div class="botones">
            <input type="button" class="boton" id="back" value="Back">
            <input type="button" class="boton" id="update" value="Update">
            <input type="button" class="boton" id="siguiente" value="Next">
            <input type="button" class="boton" id="enviar" value="Next">
            <input type="button" class="boton" id="pdf" value="Generate PDF">
        </div>        
    </div>
</body>
<script src="js/graph.js"></script>
<script src="js/form.js"></script>
<script src="js/pdf.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>