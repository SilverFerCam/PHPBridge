/*Creacion del PDF al pulsar el boton Generate PDF*/
//Evento de boton
document.getElementById("pdf").addEventListener("click",function(){
   var datos = myChart.data.datasets[0].data;   
   var resultados = [];

   //Recogida de datos del cuestionario y filtracion para resultados del PDF
   for(i=0;i<datos.length;i++){
      switch(i){
         //Primera Categoria
         case 0:{
            if(datos[i]>=1 && datos[i]<=2.45){
               resultados[i] = "Little ability to act upon and own the IT service (portfolio) delivery without top-down guidance\nfrom upper management. Likely to be blocked by changes in strategy, type of work or management \nstructure unless told what to do next. Likely IT executes requests from the business without focusing on value \nand aligning priority and expectations.";
            }else if(datos[i]>=2.5 && datos[i]<=3.9){
               resultados[i] = "Ability to act upon and own the IT service (portfolio) delivery with little top-down and/or peer\nguidance. IT likely bases its plans for service delivery on feedback from business. Service levels are agreed \nfor the service.";
            }else if(datos[i]>=4 && datos[i]<=5){
               resultados[i] = "Strong ownership and vision regarding the IT service (portfolio) delivery, able to act autonomously\nand align interdependencies with other teams. Likely to actively collaborate with and seek feedback by the \nbusiness. IT is aware of of the business value of each service and seeks to improve service delivery.";
            }
            break;
         }
         //Segunda Categoria
         case 1:{
            if(datos[i]>=1 && datos[i]<=2.45){
               resultados[i] = "Work out of line with the directions given by the governing body. Governing body and management do\nnot always maintain alignment through a clear set of shared principles and objectives. Few application of \ngovernance framework and practices.";
            }else if(datos[i]>=2.5 && datos[i]<=3.9){
               resultados[i] = "Work mostly in line with the directions given by the governing body. Governing body and management\nregularly maintain alignment through a clear set of shared principles and objectives. Application of \ngovernance framework even though practices might be inconsistently established.";
            }else if(datos[i]>=4 && datos[i]<=5){
               resultados[i] = "Work closely aligned with the directions given by the governing body. Governing body and management\nproactively maintain alignment through a clear set of shared principles and objectives. Mature application \nof a governance framework backed up by continually improved practices.";
            }
            break;
         }
         //tercera Categoria
         case 2:{
            if(datos[i]>=1 && datos[i]<=2.45){
               resultados[i] = "Lack of understanding and low awareness of the strategic plans, portfolio and enterprise architecture;\nlikely not mapped with critical dimensions and for all products and services across the IT delivery unit.";
            }else if(datos[i]>=2.5 && datos[i]<=3.9){
               resultados[i] = "Reasonable understanding and awareness of the strategic plans, portfolio and enterprise architecture\nmapped with critical dimensions and most key products and services across the IT delivery unit.";
            }else if(datos[i]>=4 && datos[i]<=5){
               resultados[i] = "Complete and shared understanding and awareness of the strategic plans, portfolio and enterprise\narchitecture mapped with critical dimensions and all products and services across the IT delivery unit.";
            }
            break;
         }
         //Cuarta Categoria
         case 3:{
            if(datos[i]>=1 && datos[i]<=2.45){
               resultados[i] = "A rather poor understanding of stakeholder needs, transparency, continual engagement, and good\nrelationships with only a few stakeholders.";
            }else if(datos[i]>=2.5 && datos[i]<=3.9){
               resultados[i] = "A good understanding of critical stakeholder needs, transparency, continual engagement, and mostly\ngood relationships with crucial stakeholders.";
            }else if(datos[i]>=4 && datos[i]<=5){
               resultados[i] = "A complete understanding of stakeholder needs, transparency, continual engagement, and excellent\nrelationships with all stakeholders.";
            }
            break;
         }
         //Quinta Categoria
         case 4:{
            if(datos[i]>=1 && datos[i]<=2.45){
               resultados[i] = "Ensure that very few IT products and services continually meet stakeholder expectations for quality,\ncosts, and time to market; an aspect might be missing (e.g. increased time to market).";
            }else if(datos[i]>=2.5 && datos[i]<=3.9){
               resultados[i] = "Ensure that critical IT products and services continually meet stakeholder expectations for quality,\ncosts, and time to market. ";
            }else if(datos[i]>=4 && datos[i]<=5){
               resultados[i] = "Ensure that all IT products and services continually meet stakeholder expectations for quality, costs,\nand time to market.";
            }
            break;
         }
         //Sexta Categoria
         case 5:{
            if(datos[i]>=1 && datos[i]<=2.45){
               resultados[i] = "Likely to experience shortage in availability of service components when and where they are needed,\nfluctuating quality when it comes to meeting agreed specifications according to organizational standards; \nAd-hoc practices dominate the daily work.";
            }else if(datos[i]>=2.5 && datos[i]<=3.9){
               resultados[i] = "Ensure that most service components are available when and where they are needed, and meet agreed\nspecifications according to organizational standards; Standard practices (e.g. ITIL 3) may be applied.";
            }else if(datos[i]>=4 && datos[i]<=5){
               resultados[i] = "Ensure that all service components are available when and where they are needed, and meet agreed\nspecifications according to organizational standards; Advanced practices (e.g. Lean) may be applied.";
            }
            break;
         }
         //Septima Categoria
         case 6:{
            if(datos[i]>=1 && datos[i]<=2.45){
               resultados[i] = "A handful of IT Services are delivered and supported according to agreed specifications and\nstakeholders’ expectations, the rest being delivered in an error-prone way. IT assumes what is valuable for its \nkey stakeholders and is often not able to prioritize and offer transparency in delivery unless being requested \nto do so.";
            }else if(datos[i]>=2.5 && datos[i]<=3.9){
               resultados[i] = "Most IT Services are delivered and supported according to agreed specifications and stakeholders’\nexpectations. IT is being reactively told by the stakeholders what is valuable and is able to prioritize and \noffer transparency in delivery on demand.";
            }else if(datos[i]>=4 && datos[i]<=5){
               resultados[i] = "All IT Services are delivered and supported according toagreed specifications and stakeholders’\nexpectations. IT knows what is valuable for its key stakeholders and is able to prioritize and offer \ntransparency in delivery at any moment.";
            }
            break;
         }
         //Octava Categoria
         case 7:{
            if(datos[i]>=1 && datos[i]<=2.45){
               resultados[i] = "Barely engaged with aligning IT practices and services with changing business needs through sporadic\nidentification and improvement of crucial elements involved in the effective management \nof products and services.";
            }else if(datos[i]>=2.5 && datos[i]<=3.9){
               resultados[i] = "Reactively engaged with aligning IT practices and services with changing business needs through the\nongoing identification and improvement of crucial elements involved in the effective \nmanagement of products and services.";
            }else if(datos[i]>=4 && datos[i]<=5){
               resultados[i] = "Fully engaged with aligning IT practices and services with changing business needs through \nthe ongoing identification and improvement of all elements involved in the effective management \nof products and services.";
            }
            break;
         }
         //Novena Categoria
         case 8:{
            if(datos[i]>=1 && datos[i]<=2.45){
               resultados[i] = "IT barely adopts and adapts general management practices from business management domains, e.g. \nInformation Security and Supplier Management, for a successful service management.";
            }else if(datos[i]>=2.5 && datos[i]<=3.9){
               resultados[i] = "IT adopts and adapts some general management practices from business management domains, e.g. Information\nSecurity and Supplier Management, to a sufficient degree for a reasonable service management.";
            }else if(datos[i]>=4 && datos[i]<=5){
               resultados[i] = "IT adopts and adapts general management practices from business management domains, e.g. Information\nSecurity and Supplier Management, for a successful service management.";
            }
            break;
         }
         //Decima Categoria
         case 9:{
            if(datos[i]>=1 && datos[i]<=2.45){
               resultados[i] = "Low maturity of service management practices that have been developed and integrated with a mostly\nstable IT service delivery. Examples: Change Control, Incident Management, IT Asset Management, \nService Configuration Management and Service desk.";
            }else if(datos[i]>=2.5 && datos[i]<=3.9){
               resultados[i] = "Average maturity of service management practices that have been developed and integrated with a\nsuccessful IT service delivery. Examples: Change Control, Incident Management, IT Asset Management, \nService Configuration Management and Service desk.";
            }else if(datos[i]>=4 && datos[i]<=5){
               resultados[i] = "High maturity of service management practices that have been developed and integrated with a successful\nand proactive IT service delivery. Examples: Change Control, Incident Management, IT Asset \nManagement, Service Configuration Management and Service desk.";
            }
            break;
         }
         //Undecima Categoria
         case 10:{
            if(datos[i]>=1 && datos[i]<=2.45){
               resultados[i] = "Low maturity of technical management practices that have been adapted from technology domains and \nintegrated in a mostly stable IT service delivery by a purpose of expanding or shifting their focus from \ntechnology solutions to IT services. Examples: Deployment management, infrastructure and platform \nmanagement.";
            }else if(datos[i]>=2.5 && datos[i]<=3.9){
               resultados[i] = "Average maturity of technical management practices that have been adapted from technology domains and\nintegrated in a successful IT service delivery by a purpose of expanding or shifting their focus from technology\nsolutions to IT services. Examples: Deployment management, infrastructure and platform management.";
            }else if(datos[i]>=4 && datos[i]<=5){
               resultados[i] = "High maturity of technical management practices that have been adapted from technology domains and \nintegrated in a successful and proactive IT service delivery by a purpose of expanding or shifting their focus \nfrom technology solutions to IT services. Examples: Deployment management, infrastructure and platform \nmanagement.";
            }
            break;
         }
         //Duodecima Categoria
         case 11:{
            if(datos[i]>=1 && datos[i]<=2.45){
               resultados[i] = "Loose commitment to and sporadic practice of continual improvement that is not embedded into everyday IT\nactivity. Lack of strong culture of continual improvement, backed up by respective techniques \nand aligned with strategic objectives.";
            }else if(datos[i]>=2.5 && datos[i]<=3.9){
               resultados[i] = "General commitment to and practice of continual improvement that is embedded into every IT activity. There\nis some culture of continual improvement, backed up by respective techniques and mostly in alignment \nwith strategic objectives.";
            }else if(datos[i]>=4 && datos[i]<=5){
               resultados[i] = "Strong commitment to and regular, proactive practice of continual improvement that is embedded into every IT\nactivity. There is a strong culture of continual improvement, backed up by respective techniques and \nalways in alignment with strategic objectives.";
            }
            break;
         }
      }
   }

   //Parte visible del PDF
   html2canvas(document.getElementById("graph"), {
      onrendered: function(canvas) {         
         var doc = new jsPDF();         
         //Estilos de las fuentes
         function setCabecera(){
            doc.setFont("Helvetica","bold");
            doc.setFontSize(20);
            doc.setTextColor("#91004b");
         }

         function setTitulo(){
            doc.setFont("Helvetica","bold");
            doc.setFontSize(13);
            doc.setTextColor("#1a6779");
         }

         function setGranate(){
            doc.setFont("Helvetica","bold");
            doc.setFontSize(13);
            doc.setTextColor("#810047");
         }

         function setDato(){
            doc.setFont("Helvetica");
            doc.setFontSize(10);
            doc.setTextColor("#adacb2");
         }

         function setHeader(){
            doc.addImage(header,'png',0,0,210,60);
         }

         function setFooter(){
            doc.addImage(footer,'png',0,277,210,20);
         }
         
         //Portada
         doc.addImage(portada,'png',0,0,210,297);
         doc.addPage();         
         
         //Pagina 2      
         setHeader();            
         setCabecera();
         doc.text(20,60,'About ITIL 4');
         setTitulo();
         doc.text(20,75,'IT services are now the first and often most important means of value \ncreation for organisations all over the world, and with that IT service management is \nevolving at an ever-increasing pace. ITIL® 4 has been created from the ground \nup specifically for this dynamic environment, while \nmaintaining the core focus on facilitating value creation in the form of IT services.')
         doc.text(20,105,'ITIL® guiding principles are a set of recommendations that can guide \nany organisation, regardless of background characteristics, like its vision, goals, \nor hierarchy.')
         doc.text(20,125,'ITIL® 4 takes governance to mean the system or systems by which an organi-\nsation is directed or managed. A governing body could be a board of directors, \na team of senior managers, or even just one chief executive.')
         doc.text(20,145,'The ITIL® 4 Service Value Chain is an operating model for IT services, \nfrom their creation to delivery and continual improvement. It has six constituent \nactivities that combine to create several value streams: Plan, Engage, \nObtain or Build, Improve, Design & Transition, Deliver & Support, Improve. \nThese streams are flexible enough that they can adapt to multiple different \nmethodologies (such as Agile) at once.');
         doc.text(20,180,'- The Plan activity is used to create an understanding of the overall vision \nfor products and services.')
         doc.text(20,195,'- The Engage activity facilitates a strong understanding of stakeholder needs \nand relationships.');
         doc.text(20,210,'- The Design and Transition activity is used to guarantee that all products and \nservices meet quality standards.');
         doc.text(20,225,'- The Obtain or Build activity is used to ensure that service components are \navailable where and when needed.');
         doc.text(20,240,'- The Deliver and Support activity ensures that products and service are \ncreated to match stakeholder specifications.');
         doc.text(20,255,'- The Improve activity is used to ensure continual improvement of all outputs \nthroughout the value chain.');         
         setFooter();
         doc.addPage();

         //Pagina 3
         setHeader();
         doc.text(20,60,'In ITIL ® 4 a management practice is a set of organisational resources \ndesigned for performing work or accomplishing an objective. The origins \nof the practices are as follows:')         
         doc.text(20,80,'In ITIL ® 4 a management practice is a set of organisational resources \ndesigned for performing work or accomplishing an objective. The origins of the \npractices are as follows:');
         doc.text(20,100,'- General management practices have been adopted and adapted for service \n management from general business management domains');
         doc.text(20,110,'- Service management practices have been developed in service management \n and ITSM industries');
         doc.text(20,120,'- Technical management practices have been adapted from technology \n management domains for service management purposes.');
         doc.text(20,135,'ITIL® 4 includes a continual improvement model, which should be used \nalongside the Improve value chain activity to aid organisations’ improvement \ninitiatives. The model supports a structured, iterative approach to continual \nimprovement, with the awareness that its implementation will vary \nconsiderably based on the specific organisations or areas to which it applies.')
         setFooter();
         doc.addPage();

         //Pagina 4      
         setHeader();            
         setCabecera();
         doc.text(20,60,'Map out the transformation roadmap');
         setTitulo();
         doc.text(20,75,'Knowing your current state and the direction in which you need to go is \nvital to structurally address your digital transformation, while involving all \ndepartments of your company. Digital Transformation Roadmap is based on the \nITIL 4 framework. The key to successful service management and achieving \nthe desired results of your digital transformation is to recognize that you need all \ncomponents during your transformation journey. The distribution of these \ncomponents may be different per team, unit and region.')
         doc.text(20,115,"With our help, you'll be able to map investment and results, which will \nhelp you streamline and maximize ROI. You will also put an end to the reactive \nand biased approach and get the transparency you need to align your vision \nwith the initiatives you are going to execute.");
         doc.text(20,140,"The results presented in the following survey are only indicative. For a \ncomplete evaluation, please contact us, we will be happy to help you.");
         setFooter();
         doc.addPage();

         //Pagina 5     
         setHeader();    
         setCabecera();
         doc.text(20,60,'Graph Results:');
         var img = canvas.toDataURL();
         doc.addImage(img, 30, 70);
         setFooter();
         doc.addPage();  

         //Pagina 6           
         setHeader();     
         doc.text(20,60,'My Results:');
         setTitulo();
         doc.text(20,75,'Guiding Principles:');
         setDato();
         doc.text(20,80,resultados[0]);
         setTitulo();
         doc.text(20,100,'Governance: ');
         setDato();
         doc.text(20,105,resultados[1]);
         setTitulo();
         doc.text(20,120,'Plan: ');         
         setDato();
         doc.text(20,125,resultados[2]);
         setTitulo();
         doc.text(20,140,'Engage: ');
         setDato();
         doc.text(20,145,resultados[3]);
         setTitulo();
         doc.text(20,165,'Design & Transition: ');
         setDato();
         doc.text(20,170,resultados[4]);
         setTitulo();
         doc.text(20,185,'Obtain or Build: ');
         setDato();
         doc.text(20,190,resultados[5]);
         setTitulo();
         doc.text(20,205,'Deliver and Support: ');
         setDato();
         doc.text(20,210,resultados[6]);
         setTitulo();
         doc.text(20,230,'Improve: ');
         setDato();
         doc.text(20,235,resultados[7]);
         setTitulo();
         doc.text(20,250,'General Management Practices: ');
         setDato();
         doc.text(20,255,resultados[8]);         
         setFooter();
         doc.addPage();

         //Pagina 7      
         setHeader();   
         setTitulo();
         doc.text(20,60,'Service Management Practices: ');
         setDato();
         doc.text(20,65,resultados[9]);
         setTitulo();
         doc.text(20,80,'Technical Management Practices: ');
         setDato();
         doc.text(20,85,resultados[10]);
         setTitulo();
         doc.text(20,105,'Continual Improvement: ');
         setDato();
         doc.text(20,110,resultados[11]);
         setFooter();
         doc.addPage();

         //Pagina 8      
         setHeader();            
         setCabecera();
         doc.text(20,60,'How SilverStorm can help you with your \ntransformation map');
         setTitulo();
         doc.text(20,80,'Since 2002 at SilverStorm we have been accompanying our customers on their \npath to digitalization and helping them to generate value so that their \nbusiness continues to grow. We are aware that the digital reality must be \naccompanied by a cultural change that seeks the best way to use technology and \nmake it valuable for people. We approach this mission by successfully rethinking \nthe essential axes of the process, relying on the three pillars that \nensure your competitiveness: Vision, Management and Experience.')
         doc.text(20,120,"With our help, you'll be able to map investment and results, which will \nhelp you streamline and maximize ROI. You will also put an end to the reactive \nand biased approach and get the transparency you need to align your vision \nwith the initiatives you are going to execute.");
         doc.text(20,144,"The results presented in the following survey are only indicative. For a \ncomplete evaluation, please contact us, we will be happy to help you.");
         doc.text(35,250,'This is only a part of what we can do for you. Want to know more?');
         setGranate();
         doc.textWithLink('www.silver-storm.com',80,260,{url:'www.silver-storm.com'});
         setFooter();
         doc.addPage();

         //Contraportada
         doc.addImage(contraportada,'png',0,0,210,300);
         
         window.sessionStorage.setItem("doc",doc)

         //Envio del PDF al servidor               
         
         var datapdf = btoa(doc.output()); 

         $.ajax({
            method: "POST",
            url: "php/upload.php",
            data: {data: datapdf},
            //timeout: 3600 *5,
         }).done(function(data){
            window.location.href = "php/mail.php";
         });

         document.getElementById("load").style.display = "inline-block";
         document.getElementById("botones").style.display = "none";
         document.body.style.overflow = "hidden";
      }
   });
});