<!DOCTYPE html>
<html>
<head>
	<title>Venturing Requirements</title>
    <link href="files/customfont.css" rel="stylesheet">
    <style>
        li { white-space: normal !important; line-height: 140%; font-family: 'Roboto', Helvetica, sans-serif; }
        li a { text-shadow: 0 1px 0 #FDD259 !important; }
        p { text-shadow: none; }
        * { font-family: 'Roboto', Helvetica, sans-serif; }
        /* .ui-header .ui-title { overflow: visible; } */
        .list-top { padding-left: 34px !important; text-indent: -18px !important; }
        .list-sub1 { padding-left: 50px !important; text-indent: -34px !important; }
        .nestedlist > li { padding-left: 5px !important; text-indent: 0px !important; }
        .header-div h1 { overflow: visible !important; }
        .subheading { background-color: #D9D9D9 !important; font-weight: normal !important; font-size: 14px !important; }
    </style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link rel="stylesheet" href="files/venturing.min.css" />
    <link rel="stylesheet" href="files/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="files/jquery.mobile-1.4.5.min.css" />
    <script src="files/jquery-1.11.1.min.js"></script>
    <script src="files/fastclick.js"></script>
    <script>window.addEventListener('load', function() {
        FastClick.attach(document.body);
    }, false);</script>
    <script src="files/jquery.mobile-1.4.5.min.js"></script>
    
    <?php 
    $ua = $_SERVER['HTTP_USER_AGENT'];
    $iphone = strpos($ua,"iPhone");
    $ipad = strpos($ua,"iPad");
    $safari = strpos($ua,"Safari"); 
    if (($iphone == true || $ipad == true) && $safari == false){
        echo '<style type="text/css"> a.ui-btn.header-button { margin-top: 18px; }  .header-div { padding-top: 18px; } </style>';
    }
    ?>
</head>
<body>


<!-- Home: Venturing Requirements -->
<div data-role="page" id="home" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
	<h1>The Venturing App</h1>
	<a href="#about" data-transition="flip" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-right ui-corner-all ui-icon-delete ui-icon-gear ui-btn-icon-notext header-button">About</a>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true" class="ui-nodisc-icon ui-alt-icon">
        <li data-role="list-divider">ALPS Core Awards</li>
		<li><a href="#venturingaward" data-transition="slide">Venturing Award</a></li>
		<li><a href="#discoveryaward" data-transition="slide">Discovery Award</a></li>
		<li><a href="#pathfinderaward" data-transition="slide">Pathfinder Award</a></li>
		<li><a href="#summitaward" data-transition="slide">Summit Award</a></li>
		<li data-role="list-divider">Specialty Awards</li>
		<li><a href="#rangeraward" data-transition="slide">Ranger Award</a></li>
		<li><a href="#questaward" data-transition="slide">Quest Award</a></li>
		<li><a href="#trustaward" data-transition="slide">TRUST Award</a></li>
	</ul>
</div>
</div>



<!-- About Page -->
<div data-role="page" id="about" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#home" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-right ui-shadow ui-corner-all ui-icon-delete ui-icon-delete ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>About</h1>
</div>
<div role="main" class="ui-content">
    <p align="center" style="font-style:italic;">An app by Nathan Vick / <a href="http://vick.media" target="_blank" style="color: #006B3F;">Vick Media</a></p>
    <p>This app is neither published nor endorsed by the Boy Scouts of America.</p>
    <p>Official requirements may be found on the <a href="http://venturing.org" target="_blank" style="color: #006B3F;">National Venturing website</a>. In case of any discrepancy, the requirements from the National Venturing website shall prevail.</p>
    <p>Some requirement data via <a href="http://meritbadge.org/" target="_blank" style="color: #006B3F;">MeritBadge.org</a>.</p>
    <p>If you notice a bug, please <a href="mailto:venturing@vick.media" style="color:#006B3F;">let us know</a>! While this app does not come with any guarantees of accuracy or function, we'll do our best to fix any problems.</p>
</div>
</div>



<!-- Venturing Award Requirements -->
<div data-role="page" id="venturingaward" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
	<a href="#home" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
	<h1>Venturing Award</h1>
</div>
<div role="main" class="ui-content">
	<p align="center"><img src="/venturingreqs/images/venturingaward.png" width="150" alt="Venturing Award" /></p>
	<ul data-role="listview" data-inset="true">
		<li class="list-top">1. Participate in a crew activity outside of a crew meeting.</li>
		<li class="list-top">2. Participate in an interview conducted by your crew president and your advisor.</li>
		<li class="list-top">3. Complete Personal Safety Awareness training.</li>
		<li class="list-top">4. State intention to join the crew during a crew induction ceremony.</li>
	</ul>
</div>
</div>



<!-- Discovery Award Requirements -->
<div data-role="page" id="discoveryaward" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
	<a href="#home" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
	<h1>Discovery</h1>
</div>
<div role="main" class="ui-content">
	<p align="center"><img src="/venturingreqs/images/discoveryaward.png" width="150" alt="Discovery Award" /></p>
	<ul data-role="listview" data-inset="true">
		<li data-role="list-divider">Adventure</li>
			<li class="list-top">1. Participate in at least two Tier II or III adventures at the crew, district, council, area, regional, or national level.</li>
			<li class="list-top">2. Complete the following:
				<ol type="a" class="nestedlist">
				<li>A standard CPR course such as American Red Cross - First Aid/CPR/AED for Schools and the Community or the American Heart Association - Heartsaver Pediatric First Aid/CPR/AED, or an equivalent course.</li>
				<li>A standard first aid course such as the American Red Cross Standard First Aid or equivalent course.</li>
                </ol>
            </li>
		<li data-role="list-divider">Leadership</li>
			<li class="list-top">3. Complete the Introduction to Leadership Skills for Crews course (or an equivalent).</li>
			<li class="list-top">4. Complete Goal-Setting and Time Management Training.</li>
			<li class="list-top">5. Complete Venturing Crew Officer Orientation.</li>
		<li data-role="list-divider">Service</li>
			<li class="list-top">6. Participate in service activities totaling at least 24 hours. Up to half of the service may be delivered personally; the rest must be delivered through crew service activities.</li>
        <li data-role="list-divider">Personal Growth</li>
			<li class="list-top">7. Complete a structured personal reflection, and use this reflection and what you learned from the process to prepare for goal-setting and as part of your Discovery Award advisor conference. Explore one of the following realms: "Adventures of Faith," "Adventures of Self," and "Adventures of Others."</li>
			<li class="list-top">8. In consultation with your advisor, establish at least one personal goal, and achieve it. The goal should be grounded in the realm you explored in Personal Growth requirement 7.</li>
			<li class="list-top">9. Since earning the Venturing Award, participate in a conference with your advisor.* As a part of this conference, discuss with your Advisor the challenges you faced and what you learned in fulfilling Personal Growth requirements 7 and 8.</li>
			<li class="list-top">10. After your Advisor conference, successfully complete a crew board of review. </li>
	</ul>
    <p align="center" style="text-shadow: none;"><em>* A Venturer is not required to share the personal reflection associated with "Adventures of Faith" with his or her Advisor, including the discussion that takes place at the Advisor conference, nor with members of a board of review.</em></p>
</div>
</div>



<!-- Pathfinder Award Requirements -->
<div data-role="page" id="pathfinderaward" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
	<a href="#home" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
	<h1>Pathfinder</h1>
</div>
<div role="main" class="ui-content">
	<p align="center"><img src="/venturingreqs/images/pathfinderaward.png" width="150" alt="Pathfinder Award" /></p>
	<ul data-role="listview" data-inset="true">
		<li data-role="list-divider">Adventure</li>
			<li class="list-top">1. Participate in at least two additional (for a total of at least four) Tier II or III adventures at the crew, district, council, area, regional, or national level. Serve as a leader for one of the adventures.</li>
		<li data-role="list-divider">Leadership</li>
			<li class="list-top">2. Complete Venturing Project Management Training.</li>
			<li class="list-top">3. Since earning the Discovery Award, plan and give leadership to a Tier II or Tier III adventure. Work with a youth mentor to ensure that you have organized the adventure in advance, that you are prepared for contingencies, and that you have prepared the members of your crew to take part. In some cases, you may need to confer with an external consultant to assure the adventure is feasible for your crew. The adventure must take place over at least two consecutive nights. If an event lasts more than four nights, an additional Venturer may share in planning and leading the adventure. If two Venturers plan the adventure, they should work with their mentor to ensure that the workload is divided fairly between the two leaders. At the close of the adventure, lead a reflection with the participants in the activity to determine what was learned and how it helped them to work together as a more effective team. An experienced Venturer should serve as your mentor for the adventure.*</li>
			<li class="list-top">4. Complete ONE of the following:
                <ul style="list-style:none;">
                <li>a. Since earning the Discovery Award, serve actively as your crew president, vice president, secretary, treasurer, guide, historian, den chief, or quartermaster for a period of at least six months**. At the beginning of your term, work with your crew president (or Advisor, if you are the president) to set performance goals for the position. Any number of different positions may be held as long as the total length of service equals at least six months. Holding simultaneous positions does not shorten the required number of months. Positions need not flow from one to the other; there may be gaps in time. Once during your term of office, discuss your successes and challenges with your crew president (or Advisor, if you are the president).</li>
                <li>b. Participate in or serve on staff for leadership training such as National Youth Leadership Training, Kodiak Challenge, National Advanced Youth Leadership Experience, Order of the Arrow National Leadership Seminar, Sea Scout SEAL Training, or Wood Badge (for Venturers 18 or older). You may also participate in non-BSA leadership training courses such as those delivered by the National Outdoor Leadership School, if approved by your Advisor.</li>
                </ul>
            </li>
		<li data-role="list-divider">Service</li>
			<li class="list-top">5. Plan, organize, and give leadership to a project designed to sustain and grow your crew. Submit the plan to your crew president (or Advisor, if you are president), and explain how you think it will encourage more young people to join Venturing.</li>
            <li class="list-top">6. Participate in service activities totaling at least 36 hours. This is in addition to the 24 hours of service required to earn the Discovery Award. Up to half of the service may be delivered personally; the rest must be delivered through crew activities.</li>
        <li data-role="list-divider">Personal Growth</li>
			<li class="list-top">7. Since earning the Discovery Award, explore the two realms ("Adventures of Faith," "Adventures of Self," and "Adventures of Others") that you did not explore previously. Based on what you discover, prepare a set of personal reflections or thoughts on the subjects. Use your reflections and what you learned from the process to prepare for fulfilling Personal Growth requirement 9 and for your Pathfinder Award Advisor conference.</li>
			<li class="list-top">8. Participate in an ethical controversy discussion activity that includes an extension into conflict resolution.</li>
            <li class="list-top">9. In consultation with your Advisor, establish at least two personal goals and achieve them. The goals should be grounded in the realms you explored in Personal Growth requirement 7.</li>
            <li class="list-top">10. Participate in an Advisor conference. As a part of this conference, discuss with your Advisor the challenges you faced and what you learned in fulfilling Pathfinder Personal Growth requirements 7 and 9.***</li>
			<li class="list-top">11. After your Advisor conference, successfully complete a crew board of review.</li>
	</ul>
<p align="center"><em>* If the crew does not have any youth mentors who have earned the Pathfinder Award and completed Mentoring training, and Advisor or associate Advisor may serve as a mentor to meet this requirement.<br /><br />
** A Venturer may substitute district, council, area, regional, or national Venturing officer or cabinet officer for the positions listed in this requirement.<br /><br />
*** A Venturer is not required to share the personal reflection associated with "Adventures of Faith" with his or her Advisor, including the discussion that takes place at the Advisor conference, nor with members of a board of review.</em></p>
</div>
</div>



<!-- Summit Award Requirements -->
<div data-role="page" id="summitaward" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
	<a href="#home" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
	<h1>Summit</h1>
</div>
<div role="main" class="ui-content">
	<p align="center"><img src="/venturingreqs/images/summitaward.png" width="150" alt="Summit Award" /></p>
	<ul data-role="listview" data-inset="true">
		<li data-role="list-divider">Adventure</li>
			<li class="list-top">1. Participate in at least three additional (for a total of seven) Tier II or III adventures at the crew, district, council, area, regional, or national level. To earn the Summit Award, a Venturer must have participated in at least one Tier III adventure and served as a leader during one adventure.</li>
		<li data-role="list-divider">Leadership</li>
			<li class="list-top">2. Complete BSA Mentoring Training prior to initiating mentoring relationships.</li>
			<li class="list-top">3. Since earning the Pathfinder Award, mentor another Venturer in the planning and implementation of a crew, council, area, regional, or national Venturing activity (see Summit Adventure requirement 1). Work with the youth enough to ensure he or she is ready to lead and has organized the appropriate resources, is prepared for contingencies, and has developed an itinerary, conducted training to support the adventure, and mitigated risk before and during the adventure. Participate in the adventure and provide feedback on how the adventure was conducted.</li>
			<li class="list-top">4. Complete TWO of the following.
                <ul style="list-style:none;" class="list-top">
                <li>a. Since earning the Pathfinder Award, serve actively as crew president, vice president, secretary, treasurer, guide, historian, den chief, or quartermaster for a period of at least six months.* At the beginning of your term, work with your crew president (or Advisor, if you are the president) to set performance goals for the position. Any number of different positions may be held as long as the total length of service equals at least six months. Holding simultaneous positions does not shorten the required number of months. Positions need not flow from one to the other; there may be gaps in time. Once during your term of office, discuss your successes and challenges with your crew president (or Advisor, if you are the president).</li>
                <li>b. Participate in or serve on staff for leadership training such as National Youth Leadership Training, Kodiak Challenge, National Advanced Youth Leadership Experience, Order of the Arrow National Leadership Seminar, Sea Scout SEAL Training, or Wood Badge (for Venturers 18 or older). You may also participate in non-BSA leadership training courses such as those delivered by the National Outdoor Leadership School, if approved by your Advisor. This must be a different training course than you completed for Pathfinder Award requirement 4b or Summit Award requirement 4c.</li>
                <li>c. Lead the delivery of Introduction to Leadership Skills for Crews for members of your Venturing crew or another local Venturing crew or for a local district or council training event. After leading the training course, discuss with your crew Advisor how you believe you helped build the skill set of your crew and what you learned by organizing the training course.</li>
                </ul>
            </li>
		<li data-role="list-divider">Service</li>
			<li class="list-top">5. Since earning the Pathfinder award, plan, develop, and give leadership to others in a service project helpful to a religious institution, school, or community. (The project must benefit an organization other than the Boy Scouts of America.) Before you start, a project proposal must be approved by the organization benefiting from the effort, your Advisor, the unit committee, and the council or district advancement committee (per local practices).</li>
        <li data-role="list-divider">Personal Growth</li>
			<li class="list-top">6. Since earning the Pathfinder Award, complete a structured personal reflection. Use this reflection to prepare for goal-setting and as part of your Advisor conference. Explore two of the following realms: "Adventures of Faith," "Adventures of Self," "Adventures of Others." You may explore one of the realms twice or select from between two different realms.</li>
			<li class="list-top">7. Create a personal code of conduct. This code of conduct should be guided by your explorations in the realms of faith, self, and others.</li>
            <li class="list-top">8. Since earning the Pathfinder Award, lead an ethical controversy and conflict resolution scenario with members of your Venturing crew.</li>
            <li class="list-top">9. Participate in an Advisor conference. As a part of this conference, share your code of conduct with your Advisor, and explain how your explorations of faith, self, and others, and your goal-setting exercises, influenced the development of your code.</li>
			<li class="list-top">10. After your Advisor conference, successfully complete a crew board of review.</li>
	</ul>
<p align="center"><em>* Venturers may substitute district, council, area, regional, or national Venturing officer or cabinet positions for the positions listed in this requirement.<br /><br />
** A Venturer is not required to share the personal reflection associated with “Adventures of Faith” with his or her Advisor or members of a board of review, including the discussion that takes place at the Advisor conference or the board of review.</em></p>
</div>
</div>



<!-- Ranger Award -->
<div data-role="page" id="rangeraward" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#home" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>Ranger Award</h1>
    <a href="#rangerpopup" data-rel="popup" data-transition="pop" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-right ui-shadow ui-corner-all ui-icon-info ui-btn-icon-notext header-button">Handbook</a>
</div>
<div role="main" class="ui-content">
	<p align="center"><img src="/venturingreqs/images/rangeraward.png" width="100" alt="Ranger Award" /></p>
	<ul data-role="listview" data-inset="true" class="ui-nodisc-icon ui-alt-icon">
        <li data-role="list-divider">Core (complete all)</li>
		<li><a href="#ranger-core" data-transition="slide">1-8. Core Requirements</a></li>
		<li data-role="list-divider">Electives (complete any four)</li>
		<li><a href="#ranger-backpacking" data-transition="slide">9. Backpacking</a></li>
		<li><a href="#ranger-caving" data-transition="slide">10. Cave Exploration</a></li>
		<li><a href="#ranger-cycling" data-transition="slide">11. Cycling/Mountain Biking</a></li>
        <li><a href="#ranger-ecology" data-transition="slide">12. Ecology</a></li>
        <li><a href="#ranger-equestrian" data-transition="slide">13. Equestrian</a></li>
        <li><a href="#ranger-firstaid" data-transition="slide">14. First Aid</a></li>
        <li><a href="#ranger-fishing" data-transition="slide">15. Fishing</a></li>
        <li><a href="#ranger-hunting" data-transition="slide">16. Hunting</a></li>
        <li><a href="#ranger-lifesaving" data-transition="slide">17. Lifesaving</a></li>
        <li><a href="#ranger-mountaineering" data-transition="slide">18. Mountaineering</a></li>
        <li><a href="#ranger-outdoorhistory" data-transition="slide">19. Outdoor Living History</a></li>
        <li><a href="#ranger-physicalfitness" data-transition="slide">20. Physical Fitness</a></li>
        <li><a href="#ranger-plants" data-transition="slide">21. Plants and Wildlife</a></li>
        <li><a href="#ranger-projectcope" data-transition="slide">22. Project COPE</a></li>
        <li><a href="#ranger-scuba" data-transition="slide">23. Scuba Certification</a></li>
        <li><a href="#ranger-shootingsports" data-transition="slide">24. Shooting Sports</a></li>
        <li><a href="#ranger-watercraft" data-transition="slide">25. Watercraft</a></li>
        <li><a href="#ranger-wintersports" data-transition="slide">26. Winter Sports</a></li>
	</ul>
</div>
    <div data-role="popup" id="rangerpopup">
        <p>A special Venturer/Ranger Handbook is available for purchase <a href="http://www.scoutstuff.org/venturer-ranger-handbook.html" target="_blank" style="color:#006B3F;">here</a>.</p>
    </div>
</div>



<!-- Ranger Core -->
<div data-role="page" id="ranger-core" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#home" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>Ranger Core</h1>
</div>
<div role="main" class="ui-content">
    <p>Complete all of the following:</p>
	<ul data-role="listview" data-inset="true" class="indentlist">
        <li data-role="list-divider">1. First Aid</li>
            <li>Complete a standard first-aid course or the American Red Cross Wilderness First Aid Basics or equivalent course.</li>
        <li data-role="list-divider">2. Communications</li>
            <li data-role="list-divider" data-theme="f" class="subheading">Do 2(a), 2(b), or 2(c).</li>
            <li class="list-top">a. Take a communications-related training class that includes at least 15 hours of training. This could be a non-required course at school such as creative writing, technical writing, American Sign Language, or film production. It could also be a commercial course such as speed-reading or effective presentations.</li>
            <li class="list-top">b. Actively participate in a communications-related club or organization for at least three months. Participate in at least three activities of the organization where you practice or improve your communications skills. Examples include Toastmasters, debate clubs, or drama clubs.</li>
            <li class="list-top">c. Read at least two books approved by your Advisor on a communications subject of interest to you. Write or give a report to your crew on the important communications principles you learned and how you think you can apply these principles to improve your communications.</li>
            <li data-role="list-divider" data-theme="f" class="subheading">AND<br />Do 2(d), 2(e), or 2(f) in connection with an outdoor skill or area you are interested in. Have your Advisor approve your plan before you begin.</li>
            <li class="list-top">d. Make a formal, oral presentation of at least 30 minutes to your crew, another crew, a Cub or Boy Scout unit, or another youth group. Include demonstrations, visual aids, or other techniques that will help you communicate more effectively.</li>
            <li class="list-top">e. Prepare and present an audio/video presentation at least 15 minutes long to your crew or other group approved by your Advisor.</li>
            <li class="list-top">f. Prepare a written pamphlet, set of instructions, or description and summary. It should be at least 1,000 words and provide a complete description of your chosen subject. Include pictures, charts, and/or diagrams to better communicate your topic. Have two people, one with expertise in the area you are presenting and one without expertise, read and critique your work. Make improvements to your draft based on their input. If your work is applicable to your crew, such as a work on caving skills, then share your work with your crew.</li>
            <li data-role="list-divider" data-theme="f" class="subheading">AND<br />Do 2(g).</li>
            <li class="list-top">g. Make a tabletop display or presentation for your crew, another crew, a Cub or Boy Scout unit, or another youth group on communications equipment used in the outdoors with emphasis on how this equipment would help in a wilderness survival situation.</li>
        <li data-role="list-divider">3. Cooking</li>
            <li class="list-top">a. Plan a menu and purchase the food for at least six people for a two night campout with at least three meals.</li>
            <li class="list-top">b. On the campout in (a) above, cook the three meals using at least two of the following three methods of cooking: fire/coals, charcoal, stove.</li>
            <li class="list-top">c. Demonstrate and explain proper safe food handling methods for outdoor cooking.</li>
            <li class="list-top">d. Demonstrate that you can prepare backpacking-type trail food using a backpacking style stove.</li>
            <li class="list-top">e. Without using any cooking utensils, prepare a meal with the four basic food groups for three people.</li>
            <li class="list-top">f. Cook an entree, a bread, and a dessert in a Dutch oven.</li>
        <li data-role="list-divider">4. Emergency Preparedness</li>
            <li class="list-top">a. Discuss potential disasters and emergency preparedness with your family and then set up a family emergency plan.</li>
            <li class="list-top">b. Build a family emergency kit.</li>
            <li class="list-top">c. Make a tabletop display or presentation on what you have learned for your crew, another crew, a Cub or Boy Scout unit, or another youth group.</li>
        <li data-role="list-divider">5. Land Navigation</li>
            <li class="list-top">a. Using a topographical map for your area or the area you will be navigating in, demonstrate that you know the following map symbols:
                <ul class="nestedlist">
                    <li>Index contour</li>
                    <li>Vertical control station</li>
                    <li>Hard-surface, heavy-duty road</li>
                    <li>Railroad, single track</li>
                    <li>Power transmission line</li>
                    <li>Building</li>
                    <li>Checked spot elevation</li>
                    <li>Marsh</li>
                    <li>Map scale</li>
                    <li>Intermittent stream</li>
                    <li>Depression</li>
                    <li>Ridge</li>
                    <li>Trail</li>
                    <li>Stream</li>
                    <li>Hard-surface, medium-duty road</li>
                    <li>Bridge</li>
                    <li>Cemetery</li>
                    <li>Campsite</li>
                    <li>Water well or spring</li>
                    <li>Unimproved dirt road</li>
                </ul>
            </li>
            <li class="list-top">b. Explain contour lines. Be able to tell the contour interval for your map and be able to show the difference between a steep and a gentle slope.</li>
            <li class="list-top">c. Using a map and compass, navigate an orienteering course that has at least six legs covering at least 2.5 miles.</li>
            <li class="list-top">d. Learn to use a global positioning system (GPS) receiver. Demonstrate that you can find a fixed coordinate or geocache at night using a GPS receiver.</li>
            <li>e. Teach the navigating skills you have learned in 5(a) through 5(d) above to your crew, another crew, a Cub or Boy Scout unit, or another group.</li>
        <li data-role="list-divider">6. Leave No Trace</li>
            <li class="list-top">a. Recite and explain the principles of Leave No Trace.</li>
            <li class="list-top">b. Participate in three separate camping/backpacking trips demonstrating that you know and use Leave No Trace principles.</li>
            <li class="list-top">c. Make a tabletop display or presentation on the Leave No Trace principles and how they affect the environment and attitude of campers for your crew, another crew, a Cub or Boy Scout unit, or another group or teach a Leave No Trace Awareness course.</li>
        <li data-role="list-divider">7. Wilderness Survival</li>
            <li data-role="list-divider" data-theme="f" class="subheading">(Note: Before you complete Wilderness Survival, you must have completed the Cooking, Land Navigation, and First Aid requirements.)</li>
            <li class="list-top">a. Write a risk management plan for an upcoming crew high adventure activity such as a whitewater canoing or rock-climbing trip. The plan should include nutrition, health, first aid, supervision, insurance, safety rules and regulations, proper equipment, maps and compass, in-service training, environmental considerations, emergency and evacuation procedures, and emergency contacts.</li>
            <li class="list-top">b. From memory, list the survival priorities and explain your use of each in a survival situation.</li>
            <li class="list-top">c. Learn about and then make a tabletop display or presentation for your crew, another crew, a Cub or Boy Scout unit, or another youth group on the following subjects:
                <ol type="i" class="nestedlist">
                    <li>Emergency signals used in the outdoors</li>
                    <li>Search and rescue patterns</li>
                    <li>Evacuation procedures and value of when to move and when not to move in a wilderness emergency</li>
                </ol>
            </li>
            <li class="list-top">d. Explain the following environmental exposure problems. Discuss what causes them, signs and signals, and treatment.
                <ol type="i" class="nestedlist">
                    <li>Hypothermia</li>
                    <li>Frostbite</li>
                    <li>Sunburn</li>
                    <li>Heat exhaustion</li>
                    <li>Heat cramps</li>
                    <li>Heat stroke</li>
                </ol>
            </li>
            <li class="list-top">e. Hydration
                <ol type="i" class="nestedlist">
                    <li>Explain dehydration and the necessity of conserving fluids in a survival situation.</li>
                    <li>Explain at least four methods of obtaining water in the outdoors and demonstrate at least two ways to treat that water.</li>
                </ol>
            </li>
            <li class="list-top">f. Fire-making
                <ol type="i" class="nestedlist">
                    <li>Demonstrate at least two different fire lays — one for cooking and one for warmth.</li>
                    <li>Learn and discuss the use of fire starters, tinder, kindling, softwoods, and hardwoods in fire making.</li>
                </ol>
            </li>
            <li class="list-top">g. Explain and demonstrate how you can gain knowledge of weather patterns using VHF band radio and other radios, winds, barometric pressure, air masses and their movements, clouds, and other indicators.</li>
            <li class="list-top">h. Knots and lashings
                <ol type="i" class="nestedlist">
                    <li>Explain the different rope materials and thicknesses that are best for wilderness use and how to care for them.</li>
                    <li>Know the use of and demonstrate how to tie the following knots and lashings:
                        <ul class="nestedlist">
                            <li>Sheet bend</li>
                            <li>Fisherman's knot</li>
                            <li>Bowline</li>
                            <li>Bowline on a bight</li>
                            <li>Two half hitches</li>
                            <li>Clove hitch</li>
                            <li>Timber hitch</li>
                            <li>Taut-line hitch</li>
                            <li>Square lashing</li>
                            <li>Shear lashing</li>
                        </ul>
                    </li>
                </ol>
            </li>
            <li class="list-top">i. Food
                <ol type="i" class="nestedlist">
                    <li>Explain the usefulness and drawbacks of obtaining food in the wilderness, including things to avoid.</li>
                    <li>Prepare and eat at least one meal with food you have found in the outdoors.</li>
                </ol>
            </li>
            <li class="list-top">j. Survival kit
                <ol type="i" class="nestedlist">
                    <li>Make a list of items you would include in a wilderness survival kit and then make copies to hand out to visitors to your wilderness survival outpost camp.</li>
                    <li>Using your list, make a wilderness survival kit. Explain the use of each item you have included.</li>
                </ol>
            </li>
            <li class="list-top">k. Outpost camp (Remember to use the Leave No Trace principles you learned.)
                <ol type="i" class="nestedlist">
                    <li>Set up a wilderness survival outpost camp and spend at least two nights and two days in your site.</li>
                    <li>Use and demonstrate several knots and lashings from requirement 7(h) in your wilderness survival campsite demonstration.</li>
                    <li>Know how to plan a wilderness shelter for three different environments and then build a shelter as part of your wilderness survival campsite demonstration.</li>
                    <li>Have your crew, another crew, a Cub or Boy Scout unit, or another youth group visit you in your outpost for a presentation you make on wilderness survival (at least one hour).</li>
                </ol>
            </li>

        <li data-role="list-divider">8. Conservation</li>
            <li class="list-top">a. As a Venturer, plan, lead, and carry out a significant conservation project under the guidance of a natural resources professional.</li>
            <li class="list-top">b. Make a tabletop display or presentation on your conservation project for your crew, another crew, a Cub or Boy Scout unit, or another youth group.</li>
	</ul>
</div>
</div>



<!-- Ranger Backpacking -->
<div data-role="page" id="ranger-backpacking" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>9. Backpacking</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Develop a personal exercise plan and follow it for at least three months, exercising at least three times a week. Set your goals with backpacking in mind and write them down. Keep a daily diary.</li>
        <li class="list-top">b. Backpacks.
            <ol type="i" class="nestedlist">
                <li>Try on three types of backpacks. Learn how to choose the proper size frame for your body size. Learn and then be able to explain to others the difference between a soft pack, an internal frame pack, and an external frame. Tell the pros and cons of each type and what kind of trek you would take with each pack.</li>
                <li>Explain the different parts of a backpack and their use.</li>
                <li>Learn the proper way to lift and wear your backpack.</li>
                <li>Describe at least four ways to limit weight and bulk in your backpack without jeopardizing your health and safety.</li>
                <li>Learn how you would load an internal frame pack versus one with an external frame.</li>
            </ol>
        </li>
        <li class="list-top">c. Packing gear.
            <ol type="i" class="nestedlist">
                <li>Pack your backpack with your personal gear, including outdoor essentials, additional gear, and personal extras. Pack as though you were sharing equipment with one other person for a three-day, two-night backpacking trip.</li>
                <li>List at least 10 items essential for an overnight backpacking trek and explain why each item is necessary.</li>
                <li>Present yourself to an experienced backpacker, unload your pack, have him or her critique your packing, then repack your pack. Have him or her critique your efforts.</li>
            </ol>
        </li>
        <li class="list-top">d. Cooking.
            <ol type="i" class="nestedlist">
                <li>List at least 20 items of group backpacking gear. Include a group cleanup kit.</li>
                <li>Learn how and then demonstrate how to cook a meal using a backpacking stove.</li>
                <li>Demonstrate proper sanitation of backpacking cook gear.</li>
                <li>Learn how to properly pack and carry a backpacking stove and fuel.</li>
            </ol>
        </li>
        <li class="list-top">e. Environmental impact.
            <ol type="i" class="nestedlist">
                <li>List at least 10 environmental considerations that are important for backpacking and describe ways to lessen their impact on the environment.</li>
                <li>Considering Leave No Trace principles, tell how to dispose of the human waste, liquid waste, and garbage you generate on a backpacking trip.</li>
            </ol>
        </li>
        <li class="list-top">f. Three treks.
            <ol type="i" class="nestedlist">
                <li>Participate in three different treks of at least three days and two nights each, covering at least 15 miles in distance each.</li>
                <li>Plan and lead a backpacking trek (can be one of the treks in (i) above) with at least five people for at least two days. This group can be your crew, another crew, a Boy Scout unit, or another youth group.</li>
                <li>Plan the menu for this trek using commercially prepared backpacking foods for at least one meal.</li>
                <li>Check for any permits needed and prepare a trip plan to be left with your family. Have an emergency contact number.</li>
                <li>Using the map you used to chart your course, brief the crew you are leading on your trip plan.</li>
                <li>Lead a shakedown for those you are leading.</li>
            </ol>
        </li>
        <li class="list-top">g. Outerwear.
            <ol type="i" class="nestedlist">
                <li>Learn about proper backpacking clothing for backpacking in all four seasons.</li>
                <li>Learn about proper footwear, socks, and foot care.</li>
                <li>Learn and then demonstrate at least three uses for a poncho in backpacking.</li>
            </ol>
        </li>
        <li class="list-top">h. Health and first aid.
            <ol type="i" class="nestedlist">
                <li>Learn about trail health considerations and typical backpacking injuries such as hypothermia, frostbite, heat exhaustion, heat stroke, altitude sickness, dehydration, blisters, stings and bites, and sprains and how to avoid and treat these injuries and illnesses.</li>
                <li>Because fluid intake is so important to a backpacker, tell how to take care of your water supply on a backpacking trip. Include ways of treating water and why that is important.</li>
            </ol>
        </li>
        <li class="list-top">i. Using all the knowledge you have acquired about backpacking, make a display or presentation for your crew, another crew, a Boy Scout unit, or another youth group. Include equipment and clothing selection and use, trip planning, environmental considerations, trail health and safety considerations, food selection and preparation, and backpacking physical preparation.</li>
	</ol>
</div>
</div>



<!-- Ranger Caving -->
<div data-role="page" id="ranger-caving" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>10. Caving</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Learn about caving.
            <ol type="i" class="nestedlist">
                <li>Write the National Speleological Society (NSS) to request information about caving and information about caves and cavers near you.</li>
                <li>Learn about the different types of caves.</li>
                <li>Learn about caving courtesy, caving dos and don'ts, and what the BSA policy is on cave exploring.</li>
                <li>Read at least one book about caving.</li>
            </ol>
        </li>
        <li class="list-top">b. Knots.
            <ol type="i" class="nestedlist">
                <li>Learn the following knots used in caving:
                    <ul class="nestedlist">
                    <li>Endline knots: bowline, figure eight, figure eight on a bight</li>
                    <li>Midline knots: bowline on a bight and butterfly</li>
                    <li>Joiner knots: water knot, fisherman, figure eight on bend</li>
                    <li>Prusik knot</li>
                    </ul>
                </li>
                <li>Teach these knots to your crew, another crew, a Cub Scout or Boy Scout unit, or another group.</li>
            </ol>
        </li>
        <li class="list-top">c. Ropes.
            <ol type="i" class="nestedlist">
                <li>Learn about the different types of ropes available for climbing and caving and explain the uses of each and the characteristics of each.</li>
                <li>Learn proper climbing rope care. Know and practice proper coding and storage.</li>
                <li>Know how to keep proper records on climbing rope and how to inspect it for wear and damage. Know when to retire a rope.</li>
                <li>Using the knowledge acquired above, make a tabletop display or a presentation for your crew, another crew, a Cub Scout or Boy Scout unit, or another group.</li>
            </ol>
        </li>
        <li class="list-top">d. Rappelling and belaying.
            <ol type="i" class="nestedlist">
                <li>Demonstrate that you know how to properly and safely rappel a distance of at least 30 feet.</li>
                <li>Demonstrate that you know how to ascend a rope using mechanical ascenders or Prusik or other ascending knots. Ascend at least 30 feet.</li>
                <li>Know and explain the differences, advantages, and disadvantages of single rope (SRT) and double rope (DRT) for rappelling and belaying.</li>
            </ol>
        </li>
        <li class="list-top">e. Outfitting.
            <ol type="i" class="nestedlist">
                <li>Visit a sporting goods store or NSS-affiliated organization or have them make a presentation to your crew so you can learn about personal caving gear, including helmets, light sources, backup lighting sources, clothing, boots, cave packs, etc.</li>
                <li>Find out what the American National Standards Institute requirements are for helmets.</li>
            </ol>
        </li>
        <li class="list-top">f. First aid.
            <ol type="i" class="nestedlist">
                <li>Make a list of what you need in your personal cave pack. Include your personal first-aid kit and cave survival gear.</li>
                <li>Learn what crew equipment is, including a first-aid kit, caving ropes, and ascending equipment.</li>
                <li>Help make a first-aid kit for your crew or group and demonstrate that you can keep it up.</li>
                <li>Demonstrate to your crew, another crew, a Cub Scout or Boy Scout unit, or another group how to construct both a personal and crew first-aid kit.</li>
            </ol>
        </li>
        <li class="list-top">g. Caves.
            <ol type="i" class="nestedlist">
                <li>Learn about the many types of cave formations.</li>
                <li>Make a tabletop display or presentation on cave formations and caving conservation for your crew, another crew, a Cub Scout or Boy Scout unit, or another group. Include practices such as proper carbide removal; care of walls, ceiling, and formations; and principles of Leave No Trace.</li>
            </ol>
        </li>
        <li class="list-top">h. Find a cave you would like to visit; get permission to enter it; make a trip plan including cave location, a list of participants, expected time in the cave, expected date and time of return, and an emergency contact; and then go in the cave, led by a qualified caver.</li>
        <li class="list-top">i. From a cave expert, learn about natural and fabricated hazards such as mudslides, loose rocks, pits, deep water, critters, complex routes, wooden ladders, and flooding.</li>
        <li class="list-top">j. Maps.
            <ol type="i" class="nestedlist">
                <li>Using a three-dimensional cave map, learn what the standard map symbols represent.</li>
                <li>Using the knowledge above, make a tabletop display or presentation for your crew, another crew, a Cub Scout or Boy Scout unit, or another group.</li>
            </ol>
        </li>
	</ul>
</div>
</div>



<!-- Ranger Cycling and Mountain Biking -->
<div data-role="page" id="ranger-cycling" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>11. Cycling</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Describe the difference between cycling (touring) and mountain biking.</li>
        <li class="list-top">b. Laws and safety.
            <ol type="i" class="nestedlist">
                <li>Know the laws governing biking in your state.</li>
                <li>Learn and know bicycle safety rules and gear for your preferred type of biking.</li>
                <li>Give a presentation and safe biking session to your crew, another crew, a Cub Scout or Boy Scout unit, or another group using the knowledge you have gained.</li>
                <li>Demonstrate proper first aid for head injuries.</li>
            </ol>
        </li>
        <li class="list-top"><em>(If you choose mountain biking as your discipline, do c(i) and c(ii).)</em><br /><br />c. Rules and environmental impact.
            <ol type="i" class="nestedlist">
                <li>Learn the mountain biking rules for the trail as stated by the IMBA (International Mountain Biking Association) and explain what is meant by soft cycling.</li>
                <li>Describe environmental considerations that are important for mountain biking and describe ways to lessen their impact on the environment.</li>
            </ol>
        </li>
        <li class="list-top">d. Maintenance checklist and journal.
            <ol type="i" class="nestedlist">
                <li>Establish a maintenance checklist that needs to be reviewed before each tour or trip.</li>
                <li>Make and keep a personal biking journal and record information on at least three tours or trips.</li>
            </ol>
        </li>
        <li class="list-top">e. Repair kit.
            <ol type="i" class="nestedlist">
                <li>Buy or build a bike tool and repair kit.</li>
                <li>Show you know how to use each tool in the kit.</li>
                <li>Repair a flat tire, adjust your brakes, properly adjust your seat and handlebars, repair a broken chain, and show you know how to temporarily repair a buckled wheel.</li>
            </ol>
        </li>
        <li class="list-top">f. Bike trail project.
            <ol type="i" class="nestedlist">
                <li>With the approval of the property owner or land manager, plan and lead a one-day bike trail or road maintenance project.</li>
                <li>Write an article about your project for your school or community newspaper.</li>
            </ol>
        </li>
        <li class="list-top">g. Cycling trips.
            <ol type="i" class="nestedlist">
                <li>Take at least eight separate cycling tours 20 miles in length or eight separate mountain biking treks 10 miles in length.</li>
                <li>Keep a personal journal of your eight trips, noting routes covered, weather conditions, sketches, maps, and sights seen. Also note significant things along the trails such as trail markers, downhills, climbs, rocks, drops, log hops, and portages.</li>
            </ol>
        </li>
        <li class="list-top">h. In addition to the tours and treks in requirement g, plan and do a two-day cycling tour 50 miles in length or mountain bike trek 40 miles in length. Your trip plan should include routes, food, proper clothing, and safety considerations. Record in your journal.</li>
        <li class="list-top">i. Do (i) or (ii):
            <ol type="i" class="nestedlist">
                <li>Make a tabletop display or presentation on cycling or mountain biking for your crew, another crew, a Cub or Scout group, or another group.</li>
                <li>Make a where-to-go biking guide for your area which has at least 10 trips or places to bike. Invite your crew, other crews, Cub and Scout groups, and other groups to use this guide.</li>
            </ol>
        </li>
	</ul>
</div>
</div>



<!-- Ranger Ecology -->
<div data-role="page" id="ranger-ecology" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>12. Ecology</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Explain the basic natural systems, cycles, and changes over time and how they are evidenced in a watershed near where you live. Include the four basic elements, land use patterns, and at least six different species in your analysis and how they have changed over time. Discuss both biological and physical components.</li>
        <li class="list-top">b. Describe at least four environmental study areas near where you live. Include the reasons for selecting these areas, their boundaries, user groups, past inventories, any outside forces that interact with them, and a list of what things could be studied at each of them.</li>
        <li class="list-top">c. Plan a field trip to each of the above areas, including detailed plans for conducting various investigations. Follow all of the requirements such as trip permits, safety plans, transportation plans, equipment needs, etc.</li>
        <li class="list-top">d. Do the following:
            <ol type="i" class="nestedlist">
                <li>Under the guidance of a natural resources professional, carry out an investigation of an ecological subject approved by your Advisor. Inventory and map the area. Conduct a detailed investigation providing specific data for a specific topic.</li>
                <li>Teach others in your crew, another crew, a Cub or Boy Scout unit, or another group how to carry out an ecological investigation. Use the steps in requirements (b) and (c) above with the group so that they may also learn by doing.</li>
            </ol>
        </li>
	</ul>
</div>
</div>



<!-- Ranger Equestrian -->
<div data-role="page" id="ranger-equestrian" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>13. Equestrian</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Explain the characteristics of each of the three distinct American riding styles.</li>
        <li class="list-top">b. For your preferred style (one of three styles in requirement (a)), explain the equipment you would use, including parts of the saddle and bridle.</li>
        <li class="list-top">c. Explain the difference in natural versus artificial aids used in communicating with your horse, such as use of hands, legs, weight, voice, whips, crops, martingales, bits, and auxiliary reins.</li>
        <li class="list-top">d. Riding attire.
            <ol type="i" class="nestedlist">
                <li>Present yourself properly attired for the riding style you prefer.</li>
                <li>Explain the clothing and safety equipment a rider must have for your preferred style of riding.</li>
            </ol>
        </li>
        <li class="list-top">e. Horse handling.
            <ol type="i" class="nestedlist">
                <li>Demonstrate how to properly catch, bridle, and saddle a horse.</li>
                <li>Demonstrate and explain at least three steps in proper mounting and two ways of dismounting.</li>
            </ol>
        </li>
        <li class="list-top">f. Stirrup length.
            <ol type="i" class="nestedlist">
                <li>Show how to test your correct stirrup length while you are dismounted and when you are mounted.</li>
                <li>Explain short stirrup length, medium stirrup length, long stirrup length, and why stirrup length is important.</li>
            </ol>
        </li>
        <li class="list-top">g. Riding position.
            <ol type="i" class="nestedlist">
                <li>Explain and demonstrate the correct position of your body, feet, hands, arms, and legs while mounted.</li>
                <li>Demonstrate how all parts of your body should be positioned on your horse during a trot, a canter, and a gallop and explain why this is important.</li>
            </ol>
        </li>
        <li class="list-top">h. Demonstrate by using a pattern that you have control of your horse.  On command, be able to slow down, speed up, stop, and back up, and be able to move your horse through its gaits.</li>
        <li class="list-top">i. Tack and cool down.
            <ol type="i" class="nestedlist">
                <li>Properly remove tack from your horse and store it.</li>
                <li>Demonstrate proper care of your tack after riding.</li>
                <li>Demonstrate proper care for your horse after a ride, including cool down, brushing, and watering and feeding, and explain why each of these steps is important.</li>
            </ol>
        </li>
        <li class="list-top">j. Make a tabletop display or presentation on what you have learned about horsemanship for your crew, another crew, a Cub Scout or Boy Scout unit, or another group.</li>
	</ul>
</div>
</div>



<!-- Ranger First Aid -->
<div data-role="page" id="ranger-firstaid" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>14. First Aid</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. First-aid kit.
            <ol type="i" class="nestedlist">
                <li>Build a personal first-aid kit or help build a group first-aid kit.</li>
                <li>Know how to use everything in the kit.</li>
                <li>Teach another person in your crew, another crew, a Cub or Boy Scout unit, or other how to make and use a personal or group first aid kit.</li>
            </ol>
        </li>
        <li data-role="list-divider" data-theme="f" class="subheading">Do b, c, or d.</li>
        <li>b. Complete a 25 hour emergency first-aid course.</li>
        <li>c. Complete a 45-hour emergency response course.</li>
        <li>d. Complete an EMT Basic course offered through a local hospital, college, or first-aid crew.</li>
	</ul>
</div>
</div>



<!-- Ranger Fishing -->
<div data-role="page" id="ranger-fishing" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>15. Fishing</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Become familiar with the freshwater fishing laws, regulations, and license requirements for your state.</li>
        <li class="list-top">b. Maps.
            <ol type="i" class="nestedlist">
                <li>Using a map of your state, designate where the different varieties of water are located, such as warm fresh water, cold fresh water (include tail waters), brackish water, and salt water.</li>
                <li>On the map, note the most popular game fish found in each spot you marked.</li>
                <li>On the map, note any protected fish species found in your state.</li>
            </ol>
        </li>
        <li class="list-top">c. Develop a personal ethical code for fishing. List a variety of potential ethical situations where choices may have to be made and describe how you plan to make decisions for those situations.</li>
        <li class="list-top">d. List at least 10 potential safety situations that you could encounter while fishing in your area and what precautions you should take to protect yourself and your fishing partners.</li>
        <li class="list-top">e. For two different species of game fish found in your state, learn where they are in the food chain, the types of waters they can be found in, and the type of underwater structure and temperature they might be most likely to be found in during the fall, winter, spring, and summer. Identify any special habitat requirements for spawning and/or juvenile growth.</li>
        <li class="list-top">f. Do one of the following:
            <ol type="i" class="nestedlist">
                <li>Plan or assist with a National Fishing Week or National Hunting and Fishing Day event (see www.gofishing.org and www.nhfday.org).</li>
                <li>Assist with a Hooked On Fishing, Not On Drugs program (see www.hofnod.com).</li>
                <li>Organize and lead a fishing trip or event to introduce other youth to fishing.</li>
            </ol>
        </li>
        <li class="list-top">g. Make a tabletop display or presentation for your crew, another crew, a Cub or Boy Scout unit, or another youth group on what you have learned about fishing.</li>
        <li class="list-top">h. Pick ONE of the three following options and complete the requirements<br /><br />
            <strong>Option A - Fresh Water (Spinning, Spin Casting, Bait Casting)</strong>
            <ol type="i" class="nestedlist">
                <li>Catching and cooking
                    <ol type="A" class="nestedlist">
                        <li>Catch two different species of fish using spinning, spin-casting, and/or bait casting outfits.</li>
                        <li>Learn the proper technique to release fish and release at least one fish, ensuring that it will recover, and safely swim away.</li>
                        <li>Catch another fish, which you will clean, cook, and eat. Study and note several cleaning and cooking options.</li>
                        <li>Present to the youth in your crew, another Scouting unit, or a youth group your experience in releasing fish and the cleaning and cooking of fish. Discuss the contrasting experiences.</li>
                    </ol>
                </li>
                <li>Learn and teach the following to someone else:
                    <ol type="A" class="nestedlist">
                        <li>Explain the difference between a spin-casting outfit, a spinning outfit, and a bait-casting outfit. Describe the benefits of each type and where and how one might be better for certain fishing situations.
                        <li>Study and explain how a reel drag should be used. Teach the proper use and function of drag settings.
                        <li>Teach how to properly play a fish under several situations.
                        <li>Study and present the use of basic fishing knots, making sure you can teach at a minimum:
                            <ul class="nestedlist">
                                <li>an improved clinch knot</li>
                                <li>the palomar knot or a turle knot</li>
                                <li>a blood knot or barrel knot</li>
                            </ul>
                        Tie each knot with ease and explain how it is used.</li>
                        <li>Show how to cast two of the three types of outfits. With each, demonstrate two ways to make effective casts using targets. Learn safety measures needed to ensure safe casting.</li>
                    </ol>
                </li>
                <li>Do ONE of the following:</li>
                    <ol type="A" class="nestedlist">
                        <li>Build a fishing rod of your choice.</li>
                        <li>Design and make your own fishing lure and explain the fish attracting principle of the lure.</li>
                        <li>With approval of the proper agency, plan and implement a fishery conservation project. Contact the local district biologist at your state fish and wildlife agency, go to the International Association of Fish and Wildlife Agencies Web site at www.iafwa.org and click on "Download State Directors Directory." Document your project with pictures and/or acknowledgment from the agency managing the waterway.</li>
                    </ol>
                </li>
            </ol>
            <br />
            <strong>Option B - Fly Fishing</strong>
            <ol type="i" class="nestedlist">
                <li>Catching and cooking
                    <ol type="A" class="nestedlist">
                        <li>Catch two different species of fish using a fly-fishing outfit.</li>
                        <li>Learn the proper technique to release fish and release at least one fish, ensuring that it will recover, and safely swim away.</li>
                        <li>Catch another fish, which you will clean, cook, and eat. Study and note several cleaning and cooking options.</li>
                        <li>Present to the youth in your crew, another Scouting unit, or a youth group your experience in releasing fish and the cleaning and cooking of fish. Discuss the contrasting experiences.</li>
                    </ol>
                </li>
                <li>Learn and teach the following to someone else:
                    <ol type="A" class="nestedlist">
                        <li>Explain the difference between a dry fly, wet fly, streamer, nymph, and bass bugs or poppers. Describe the benefits of each type and where and how one might be better for certain fishing situations.</li>
                        <li>Study and explain how to match rod, reel, line, and leader to develop a balanced outfit. Explain how to select the right outfit for various fishing situations. Understand the makeup of fly lines and teach the advantages of weight-forward lines versus double-taper lines. Identify and explain the various types of lines and their advantages (floating, sink-tip, and sinking lines).</li>
                        <li>Teach how to properly play a fish under several situations, recognizing that fish exhaustion is critical to catch-and-release survival.</li>
                        <li>Study and present the use of basic fishing knots, making sure you can teach at a minimum:
                            <ul class="nestedlist">
                                <li>an arbor backing knot</li>
                                <li>the nail knot or a tube knot</li>
                                <li>a blood knot or barrel knot</li>
                                <li>the improved clinch knot</li>
                            </ul>
                        Tie each knot with ease and explain how it is used.</li>
                        <li>Show how to cast. Demonstrate casting skills, explaining proper grip, casting arc, how to "load" the rod, and how to present the fly. Demonstrate various ways to make effective casts using targets. Learn safety measures needed to ensure safe casting.</li>
                    </ol>
                </li>
                <li>Do ONE of the following:
                    <ol type="A" class="nestedlist">
                        <li>Build a fly rod of your choice.</li>
                        <li>Tie SIX flies (nymph, wet fly, dry fly, and/or streamer) and explain how each pattern is used to imitate what fish eat.</li>
                        <li>With approval of the proper agency, plan and implement a fishery conservation project. Contact the local district biologist at your state fish and wildlife agency, go to the International Association of Fish and Wildlife Agencies Web site at www.iafwa.org and click on "Download State Directors Directory." Document your project with pictures and/or acknowledgment from the agency managing the waterway.</li>
                    </ol>
                </li>
            </ol>
            <br />
            <strong>Option C - Salt Water</strong>
            <ol type="i" class="nestedlist">
                <li>Catching and cooking
                    <ol type="A" class="nestedlist">
                        <li>Catch two different species of fish by surf fishing, casting from a boat, and/or trolling, using proper equipment.</li>
                        <li>Learn the proper technique to release fish and release at least one fish, ensuring that it will recover, and safely swim away.</li>
                        <li>Catch another fish, which you will clean, cook, and eat. Study and note several cleaning and cooking options.</li>
                        <li>Present to the youth in your crew, another Scouting unit, or a youth group your experience in releasing fish and the cleaning and cooking of fish. Discuss the contrasting experiences.</li>
                    </ol>
                </li>
                <li>Learn and teach the following to someone else:
                    <ol type="A" class="nestedlist">
                        <li>Explain the difference between surf fishing, casting from a boat, and trolling from a boat. Describe the benefits of each type and where and how one might be better for certain fishing situations.</li>
                        <li>Study and explain how a reel drag should be used. Teach the proper use and function of drag settings.</li>
                        <li>Teach how to properly play a fish under several situations.</li>
                        <li>Study and present the use of basic fishing knots, making sure you can teach at a minimum:
                            <ul class="nestedlist">
                                <li>an improved clinch knot</li>
                                <li>the palomar knot or a turle knot</li>
                                <li>a blood knot or barrel knot</li>
                            </ul>
                        Tie each knot with ease and explain how it is used.</li>
                    </ol>
                </li>
            </ol>
        </li>
        <li class="list-top">i. If you live in a coastal state, become familiar with the saltwater fishing laws, regulations, and license requirements for your state. If you live in an inland state, become familiar with the saltwater fishing laws, regulations, and license requirements for a coastal state of your choice.</li>
        <li class="list-top">j. Do ONE of the following:
            <ol type="i" class="nestedlist">
                <li>Build a fishing rod of your choice.</li>
                <li>Design and make several fishing lures and explain the fish attracting principle of each lure.</li>
                <li>With approval of the proper agency, plan and implement a fishery conservation project. Contact the local district biologist at your state fish and wildlife agency, go to the International Association of Fish and Wildlife Agencies Web site at www.iafwa.org and click on "Download State Directors Directory." Document your project with pictures and/or acknowledgment from the agency managing the waterway.</li>
            </ol>
        </li>
	</ul>
</div>
</div>



<!-- Ranger Hunting -->
<div data-role="page" id="ranger-hunting" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>16. Hunting</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Hunter education and enforcement.
            <ol type="i" class="nestedlist">
                <li>Successfully complete a hunter education course offered by your state wildlife/conservation agency.</li>
                <li>Learn and explain the requirements to become a volunteer hunter education instructor in your state.</li>
                <li>Explain how to report a wildlife-related violation to the appropriate law enforcement agency.</li>
            </ol>
        </li>
        <li class="list-top">b. Do b(i), b(ii), or b(iii).
            <ol type="i" class="nestedlist">
                <li>Successfully complete a bowhunter education course offered by your state or the National Bowhunter Education Foundation.</li>
                <li>Successfully complete a National Muzzle Loading Rifle Association Rifle Basic course.</li>
                <li>Participate in a National Rifle Association-International Hunter Education Association Youth Hunter Education Challenge event sponsored by your state.</li>
            </ol>
        </li>
        <li class="list-top">c. Do c(i), c(ii), or c(iii).
            <ol type="i" class="nestedlist">
                <li>Assist a certified hunter education instructor with a hunter education course.</li>
                <li>Either plan or assist in putting on a National Hunting and Fishing Day program.</li>
                <li>Talk with a game warden/ conservation officer about his/her job. If possible, observe/assist at a game check station in your state.</li>
            </ol>
        </li>
        <li class="list-top">d. Plan and carry out a hunting trip approved by an Advisor.</li>
        <li class="list-top">e. Make a tabletop display or presentation on what you have learned for your crew, another crew, a Cub or Boy Scout unit, or another youth group.</li>
	</ul>
</div>
</div>



<!-- Ranger Lifesaving -->
<div data-role="page" id="ranger-lifesaving" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>17. Lifesaving</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Do a(i), a(ii), or a(iii)
            <ol type="i" class="nestedlist">
                <li>Complete the Boy Scout or Venturing Lifeguard requirements and hold a current certification. (Note: BSA Lifeguard certification lasts for three years from the time of certification.)</li>
                <li>Complete a 45-plus-hour emergency response course or an EMT Basic course.</li>
                <li>Earn the American Red Cross Lifeguard Training or Lifeguard Trainer certificate.</li>
            </ol>
        </li>
        <li class="list-top">b. First-aid kit.
            <ol type="i" class="nestedlist">
                <li>Help build a crew or family first-aid kit.</li>
                <li>Know how to use everything in the kit.</li>
                <li>Teach another person or group how to make and use a first-aid kit.</li>
            </ol>
        </li>
	</ul>
</div>
</div>



<!-- Ranger Mountaineering -->
<div data-role="page" id="ranger-mountaineering" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>18. Mountaineering</h1>
</div>
<div role="main" class="ui-content">
	<p>Note: You must complete the First Aid core requirement before you begin this elective.</p>
    <ul data-role="listview" data-inset="true">
        <li class="list-top">a. Do the following:
            <ol type="i" class="nestedlist">
                <li>Explain the difference between bouldering and technical climbing.</li>
                <li>Tell how bouldering can help your crew get ready for more advanced climbing.</li>
                <li>Demonstrate bouldering using the three-point stance and proper clothing.</li>
            </ol>
        </li>
        <li class="list-top">b. Do the following:
            <ol type="i" class="nestedlist">
                <li>Explain the classification and grades of climbing difficulty in technical rock climbing.</li>
                <li>Tell how weather can change the difficulty of any ascent.</li>
            </ol>
        </li>
        <li class="list-top">c. Learn and then teach the following climbing knots to your crew, another crew, a Scout group, or another group:
            <ul class="nestedlist">
                <li>Figure eight on a bight</li>
                <li>Water knot</li>
                <li>Bowline on a coil</li>
                <li>Figure eight follow-through</li>
                <li>Grapevine knot</li>
            </ul>
        </li>
        <li class="list-top">d. Do the following:
            <ol type="i" class="nestedlist">
                <li>Learn about the different types of ropes available for climbing and explain the uses of each and the characteristics of each.</li>
                <li>Learn proper climbing rope care. Know and practice proper coiling and storage.</li>
                <li>Know how to keep proper records on climbing rope and how to inspect it for wear and damage. Know when to retire a rope.</li>
                <li>Using the knowledge acquired above, make a tabletop display or a presentation for your crew, another crew, a Cub Scout or Boy Scout unit, or another group.</li>
            </ol>
        </li>
        <li class="list-top">e. Do the following:
            <ol type="i" class="nestedlist">
                <li>Demonstrate the difference between natural and artificial anchors.</li>
                <li>Be able to identify and describe the use of at least three different types of hardware and setups.</li>
                <li>Tell about proper climbing safety both before and during a climb.</li>
                <li>Learn about rescue equipment and techniques.</li>
                <li>Learn about appropriate clothing, footwear, gloves, helmets, and other climbing gear.</li>
            </ol>
        </li>
        <li class="list-top">f. Be able to correctly put on and then be able to teach others how to put on at least two of the following:
            <ul class="nestedlist">
                <li>Commercially made climbing harness</li>
                <li>Diaper sling</li>
                <li>Knotted leg-loop seat</li>
                <li>Swiss seat sling</li>
            </ul>
        </li>
        <li class="list-top">g. Do the following:
            <ol type="i" class="nestedlist">
                <li>Demonstrate three types of belays.</li>
                <li>Learn and then demonstrate that you know proper verbal climbing and belaying signals used between climber and belayer.</li>
            </ol>
        </li>
        <li class="list-top">h. Do h(i) and h(ii), or do h(iii).
            <ol type="i" class="nestedlist">
                <li>Under the supervision of a qualified rappelling or climbing instructor, rappel at least 30 feet down a natural or artificial obstacle.</li>
                <li>Under the supervision of a qualified climbing instructor, climb at least 30 feet up a natural or artificial obstacle.</li>
                <li>Attend a two-day rock climbing clinic/course led by a qualified climbing instructor. This course should include some instruction on technical rock climbing.</li>
            </ol>
        </li>
        <li>i. Lead your crew, another crew, an older Boy Scout troop, or another teenage group on a climbing and/or rappelling activity. Recruit adequate, qualified adult instructors and assist in instruction.</li>
	</ul>
</div>
</div>



<!-- Ranger Outdoor Living History -->
<div data-role="page" id="ranger-outdoorhistory" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>19. Outdoor History</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Research a historical culture and time period of interest to you, such as Native American, mountain man, pioneer, or Revolutionary/Civil War.</li>
        <li class="list-top">b. Write a 2,000-word essay or make an outline describing the culture's dress, food, housing, customs, etc.</li>
        <li class="list-top">c. Using your research, make an outfit that represents a person or type of person (soldier, farmer, trader, hunter, chief, etc.) from your chosen culture.</li>
        <li class="list-top">d. Using your research, construct a working tool or weapon out of authentic materials that would have been used by the person you have chosen to represent in requirement (c) above.</li>
        <li class="list-top">e. Once your clothing and accouterments are complete, attend and participate in a pow wow, rendezvous, reenactment, historical trek, or other event that includes your chosen culture.</li>
        <li class="list-top">f. Make a presentation of your chosen culture to your crew, another crew, a Cub or Scout group, or another group.</li>
        <li class="list-top">g. Tour.
            <ol type="i" class="nestedlist">
                <li>Organize a group tour to a museum, archaeological dig, or other site of significance to your chosen culture.</li>
                <li>After the tour, lead your group in a discussion about what they learned.</li>
            </ol>
        </li>
	</ul>
</div>
</div>



<!-- Ranger Physical Fitness -->
<div data-role="page" id="ranger-physicalfitness" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>20. Physical Fitness</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Make an appointment with your doctor for a complete physical. Explain to your doctor you are preparing to undertake an eight-week physical fitness improvement program.</li>
        <li class="list-top">b. Explain at least six principles that guide you in developing a physical fitness program.</li>
        <li class="list-top">c. Four components of physical fitness are endurance, strength, flexibility, and body composition.
            <ol type="i" class="nestedlist">
                <li>Explain why these components are important to your physical fitness.</li>
                <li>Find a physical fitness professional to administer a fitness test based on these four components. Set physical fitness goals with the help of this professional that can be accomplished in eight weeks. The physical education teachers at school should be able to do this test.</li>
            </ol>
        </li>
        <li class="list-top">d. Develop an eight-week program to accomplish your goals. Use the principles of warm-up, cross-training, cool-down, and regularity.</li>
        <li class="list-top">e. Explain the six elements of a good diet.</li>
        <li class="list-top">f. Using the USDA Food Guide Pyramid, list six foods from each group.</li>
        <li class="list-top">g. Learn to calculate the number of calories you need if you are sedentary, moderately active, or active.</li>
        <li class="list-top">h. Explain the common eating disorders anorexia and bulimia and why they are harmful to athletes.</li>
        <li class="list-top">i. Explain the hazards of performance-enhancing drugs, including the dangers of using each of the following groups of drugs: stimulants, painkillers, anabolic steroids, beta blockers, diuretics, alcohol, marijuana, and cocaine.</li>
        <li class="list-top">j. Prevention of injury is important to achieving peak physical performance. Pain is not a normal part of physical development. Soreness and discomfort may be expected, but not pain. Explain how to prevent injury in your fitness program.</li>
        <li class="list-top">k. Using what you have learned about physical fitness, teach your crew, a Cub or Boy Scout unit, or another group about setting up a physical fitness program.</li>
	</ul>
</div>
</div>



<!-- Ranger Plants and Wildlife -->
<div data-role="page" id="ranger-plants" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>21. Plants &amp; Wildlife</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Write a paper or make a presentation on a plant or wildlife species. Include its value as seen from various perspectives, some of the problems various species face, and how we might be able to help.</li>
        <li class="list-top">b. Nature observation.
            <ol type="i" class="nestedlist">
                <li>Select an area approved by your Advisor that contains several species of wildlife or plants. Observe this area thoroughly in various conditions and seasons of the year. Study the history of this area, paying particular attention to how it has changed over time, ownership, land use patterns, and landform and climatic changes.</li>
                <li>Make a presentation on interaction between species; the reaction of various species to changes in conditions or outside influences; the degree to which this area provided food, shelter, materials, and protection for each species; population trends; your predictions on the future of these species; suggested actions to protect or enhance the population; and the investigation methods you used.</li>
            </ol>
        </li>
        <li class="list-top">c. Species study.
            <ol type="i" class="nestedlist">
                <li>Study a specific plant or wildlife species approved by your Advisor that can be found in several different areas. Observe this species thoroughly in various areas and seasons of the year. Study the history of this species, paying particular attention to how it has adapted over time.</li>
                <li>Make a presentation on this species; any reactions to changes in conditions or outside influences; this species' needs for food, soil, shelter, materials, protection, assistance with propagation, etc.; population trends; your prediction for the future of this species; suggested actions to protect or enhance the population; and the investigation methods you used.</li>
            </ol>
        </li>
        <li class="list-top">d. Under the guidance of a resource professional, plan, lead, and carry out a project approved by your Advisor designed to benefit plants or wildlife. Involve others so that you can increase their awareness of the condition of plants and wildlife in your area.</li>
        <li class="list-top">e. Do e(i) or e(ii).
            <ol type="i" class="nestedlist">
                <li>Make a tabletop display or presentation on your project for your crew, another crew, a Cub or Boy Scout unit, or another group.</li>
                <li>Submit an article about your project to a local newspaper, radio station, your school newspaper, or TV station.</li>
            </ol>
        </li>
	</ul>
</div>
</div>



<!-- Ranger Project COPE -->
<div data-role="page" id="ranger-projectcope" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>22. Project COPE</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li data-role="list-divider">Do a, b, or c.</li>
        <li class="list-top">a. Complete and teach courses
            <ol type="i" class="nestedlist">
                <li>Complete a BSA Project COPE course including both low and high initiatives. (Project COPE stands for Challenging Outdoor Personal Experience and is an outdoor course available through most Boy Scout councils. It usually involves a weekend of team building using group initiative games and low and high ropes course obstacles. This is an excellent crew activity.)</li>
                <li>After you have personally been through a COPE course, help run at least two other COPE courses.</li>
            </ol>
        </li>
        <li class="list-top">b. Attend the BSA's National Camping School and successfully complete the COPE director's course.</li>
        <li class="list-top">c. Complete a hands-on outdoor education course through a college or university of at least 80 hours.</li>
	</ul>
</div>
</div>



<!-- Ranger Scuba Certification -->
<div data-role="page" id="ranger-scuba" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>23. Scuba</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Become certified as an Open Water Diver by the Professional Association of Diving Instructors (PADI) or the National Association of Underwater Instructors (NAUI). If PADI or NAUI instruction and certification are not available, certification may be accepted from other agencies that comply with the Recreational Scuba Training Council (RSTC) guidelines, provided that such acceptance has been expressly approved by your local BSA council in consultation with the BSA national Health and Safety Service.</li>
        <li class="list-top">b. Make a presentation to your crew, another crew, or a Cub or Boy Scout unit on what it takes to become certified and some other subject related to scuba diving.</li>
        <li class="list-top">c. Assist with a Discover Scuba program. (Note: An Open Water Diver may assist with logistics under the guidance of the instructor conducting the program, but is not qualified to and is not expected to perform as a professional-level assistant such as a divemaster or assistant instructor.)</li>
	</ul>
</div>
</div>



<!-- Ranger Shooting Sports -->
<div data-role="page" id="ranger-shootingsports" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>24. Shooting Sports</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. General knowledge.
            <ol type="i" class="nestedlist">
                <li>Recite, explain, and demonstrate the three primary shooting safety rules.</li>
                <li>Recite and explain the range commands.</li>
                <li>Identify the parts of a pistol, rifle, or bow (whichever one you select) and explain the function of those parts.</li>
                <li>If you chose air pistol, air rifle, muzzle-loading rifle, pistol, or small-bore rifle for your shooting discipline, explain how "minute of angle" is used to "zero" the airgun or firearm.</li>
                <li>If you chose muzzle-loading rifle as your shooting discipline, recite the proper steps for loading a muzzle-loading rifle and the proper sequence of firing the shot. Explain each step.</li>
                <li>If you chose archery as your shooting discipline, recite and explain the nine steps to the 10 ring.</li>
                <li>If you chose shotgun as your shooting discipline, explain how you sight a shotgun differently than you would a rifle.</li>
            </ol>
        <li class="list-top">b. Complete a basic training course and the course of fire for one of the following shooting disciplines: i, ii, iii, iv, v, vi, or vii. (Restrictions: Telescopic sights, electronic sights, and laser sights are prohibited in all disciplines except archery.)<br />For this elective, shooting must be under the supervision of a certified instructor/coach and with equipment approved by that instructor.
            <ol type="i" class="nestedlist">
                <li>Air pistol
                    <ul style="list-style: none;" class="nestedlist">
                        <li>Sporter Course: Shoot five shots each at eight TQ7 targets at a distance of 25 feet for a total of 40 shots. You must score 240 out of a possible 400. (You may use any .177 air pistol with a maximum retail value of $75 and may use a one-hand grip, two-hand grip, or a combination of both.)</li>
                        <li>OR</li>
                        <li>International Course: Shoot five shots each at eight bull's-eye B-40 targets at a distance of 33 feet for a total of 40 shots. You must score 220 points of a possible 400. You may use any .177 air pistol. All targets must be fired in the standing position only using only one hand to support the pistol.</li>
                    </ul>
                </li>
                <li>Air rifle
                    <ul style="list-style: none;" class="nestedlist">
                        <li>Sporter Course: Shoot two shots at each bull (10 shots per target) from a distance of 33 feet using six AR5/5 targets. Of the 60 shots total, shoot 20 shots in each position-prone, standing (off-hand), and kneeling. You must score 225 of a possible 600. (You may use any stock, out-of-the-box .177 air rifle.)</li>
                        <li>OR</li>
                        <li>Precision Course: Shoot two shots at each bull (10 shots per target) from a distance of 33 feet. Of the 60 shots total, shoot 20 shots in each position - prone, standing (off-hand), and kneeling. You must score 420 of a possible 600. (You may use any .177 air rifle.)</li>
                    </ul>
                </li>
                <li>Archery (Magnifying sights are OK to use in this discipline.)
                    <ul style="list-style: none;" class="nestedlist">
                        <li><em>Recurve Bow</em></li>
                        <li>Indoor: Shoot 30 arrows at 18 meters on a 60-centimeter five color target. You must score 150 of a possible 300.</li>
                        <li>Outdoor: Shoot 30 arrows at 40 meters on a 122-centimeter five color target. You must score 200 of a possible 300.</li>
                        <li>OR</li>
                        <li><em>Compound Bow</em></li>
                        <li>Indoor: Shoot 30 arrows at 18 meters on a 40-centimeter five color target. You must score 150 of a possible 300.</li>
                        <li>Outdoor: Shoot 30 arrows at 40 meters on a 122-centimeter five color target. You must score 210 of a possible 300.</li>
                    </ul>
                </li>
                <li>Muzzle-Loading Rifle
                    <ul style="list-style: none;" class="nestedlist">
                        <li>Shoot one shot at each bull's-eye on 10 targets (M02400-NMLRA) for a total of 50 shots from the standing (off-hand) position at a distance of 25 yards. You must score 250 of a possible 500.</li>
                        <li>Then, shoot five shots at one target (M02406-NMLRA) from the standing (off-hand) position at a distance of 50 yards. You must score 25 of a possible 50.</li>
                        <li>Then, shoot five shots at one target (M02406-NMLRA) from the sitting position, resting the rifle on "crossed sticks" at a distance of 50 yards. You must score 25 of a possible 50.</li>
                        <li>(Total shots for muzzle loading is 60 shots.)</li>
                        <li>(NMLRA = National Muzzle Loading Rifle Association)</li>
                    </ul>
                </li>
                <li>Pistol
                    <ul style="list-style: none;" class="nestedlist">
                        <li>Shoot 10 shots at each of six targets (B-2) from the standing (off-hand) position in a maximum time of 10 minutes per target from a distance of 50 feet. You must score 360 of a possible 600. (You may use any.22-caliber pistol or revolver and can use either the one- or two-hand grip or both.)</li>
                        <li>(Total shots for pistol is 60 shots.)</li>
                    </ul>
                </li>
                <li>Shotgun
                    <ul style="list-style: none;" class="nestedlist">
                        <li>Break 25 clay birds of a possible 50 on a skeet course and 25 clay birds of a possible 50 on a trap course.</li>
                        <li>OR</li>
                        <li>Break 50 clay birds of a possible 100 on a skeet course.</li>
                        <li>OR</li>
                        <li>Break 50 clay birds of a possible 100 on a trap course.</li>
                    </ul>
                </li>
                <li>Small Bore Rifle
                    <ul style="list-style: none;" class="nestedlist">
                        <li>Sporter Course: Using six A17 targets, shoot one shot at each record bull from a distance of 50 feet for a total of 60 shots. Of the 60 shots, you must shoot 20 shots in each position-prone, standing (off-hand), and kneeling. You "must score 225 of a possible 600. (you may use any .22 rifle with a maximum retail value of $235.)</li>
                        <li>OR</li>
                        <li>Precision Course: Using six A17 targets, shoot one shot at each record bull from a distance of 50 feet for a total of 60 shots. Of the 60 shots, shoot 20 shots in each position-prone, standing (offhand), and kneeling. You must score 420 of a possible 600. (You may use any.22 rifle.)</li>
                    </ul>
                </li>
            </ol>
        <li class="list-top">c. Make a tabletop display or presentation for your crew, another crew, a Cub or Boy Scout unit, or another youth group about what you have learned about shooting sports. Include information about shooting sports in the summer and winter Olympics.</li>
	</ul>
</div>
</div>



<!-- Ranger Watercraft -->
<div data-role="page" id="ranger-watercraft" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>25. Watercraft</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Take BSA Safety Afloat Training.
            <ol type="i" class="nestedlist">
                <li>Explain the BSA Safety Afloat plan.</li>
                <li>Demonstrate during a watercraft activity that you know the BSA Safety Afloat plan.</li>
            </ol>
        </li>
        <li class="list-top">b. Complete a basic boating safety course provided by the U.S. Coast Guard Auxiliary, U.S. Power Squadrons, US Sailing, American Red Cross, or your state's boating law administrator.</li>
        <li class="list-top">c. Rescue and hypothermia.
            <ol type="i" class="nestedlist">
                <li>Learn and demonstrate water rescue techniques, including self rescue, group rescue, boat-assisted rescue, short-line rescue, and boat-over-boat rescue.</li>
                <li>Learn and demonstrate that you know the rules for avoiding water-caused hypothermia and what to do in case of hypothermia.</li>
            </ol>
        </li>
        <li class="list-top">d. Present the American Canoe Association Start Smart Program or another program on boating safety to your crew, another crew, a Cub or Boy Scout unit, or another youth group on boating safety.</li>
        <li data-role="list-divider" data-theme="f" class="subheading">Do requirement e, f, or g.</li>
        <li class="list-top">e. Paddle craft.
            <ol type="i" class="nestedlist">
                <li>Learn the American Whitewater Affiliation Safety Code and demonstrate your knowledge during a paddle craft activity.</li>
                <li>Learn about the International Scale of River Difficulty by describing the six classifications of rivers.</li>
                <li>On a whitewater river map of your choice, be able to show why different sections are classified the way they are.</li>
                <li>Learn and describe the differences of the following paddle craft and explain which are appropriate for one, two, or more paddlers:
                    <ul class="nestedlist">
                        <li>Canoes: recreational, touring, whitewater, freestyle, decked, C1</li>
                        <li>Kayaks: recreational, touring, sit-on-top, downriver, race, whitewater playboat, whitewater creek</li>
                        <li>Rafts: self bailing, paddle, frame, cataraft, inflatable kayak</li>
                    </ul>
                </li>
                <li>Learn and use paddling techniques and maneuvers for one of the following craft:
                    <ul class="nestedlist">
                        <li>Canoe, both single and double passenger</li>
                        <li>Kayak, single or double passenger</li>
                        <li>Raft, be the paddling captain</li>
                    </ul>
                </li>
                <li>Using an appropriate canoe, kayak, or raft, paddle a slow river, lake, or coastal waterway, a distance of at least eight miles, or run a whitewater river, a distance of six miles with at least one class II rapid. If using a paddle raft, be the paddle captain.</li>
        <li class="list-top">f. Boardsailing
            <ol type="i" class="nestedlist">
                <li>Learn and demonstrate the BSA rules for boardsailing.</li>
                <li>Learn how to boardsail.</li>
            </ol>
        </li>
        <li class="list-top">g. Sailboating. Become certified as a US Sailing Small Boat Sailor or US Sailing Instructor.</li>
	</ul>
</div>
</div>



<!-- Ranger Winter Sports -->
<div data-role="page" id="ranger-wintersports" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#rangeraward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>26. Winter Sports</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Be familiar with cold weather-related injuries and how to avoid and treat them.</li>
        <li class="list-top">b. Know and explain the safety codes for your chosen winter sport (alpine skiing, Nordic skiing, snowboarding, snowmobiling, or ice skating). Example: Skier's Responsibility Code found in the National Ski Areas Association Classroom Guide for skier education, published by the National Ski Patrol.</li>
        <li class="list-top">c. Design a 30-day physical fitness and stretching program that will prepare you for your chosen winter sport, including exercising and stretching for at least 30 minutes three times a week for 30 days.</li>
        <li class="list-top">d. Choose one of the following winter sports and complete the requirements for that sport.<br /><br />
            <strong>Alpine Skiing</strong>
            <ol type="i" class="nestedlist">
                <li>During a winter season, participate in at least six recreational ski sessions totaling 40 hours.</li>
                <li>On one of your ski trips, demonstrate to the adult ski counselor approved by your Advisor that you are proficient in this sport, skiing various types of ski terrain, including moguls.</li>
                <li>Give instruction and assistance to a group of beginner skiers. Teach them basic turns and stops.</li>
                <li>Make a tabletop display or presentation for your crew, another crew, a Cub or Boy Scout unit, or another youth group on alpine skiing.</li>
            </ol>
            <strong>Nordic Skiing</strong>
            <ol type="i" class="nestedlist">
                <li>During a winter season, participate in at least six recreational ski sessions totaling 40 hours.</li>
                <li>On one of your ski trips, demonstrate to the adult ski counselor approved by your Advisor that you are proficient in this sport, skiing all types of ski terrain, and that you can use a map and compass while skiing.</li>
                <li>Give instruction and assistance to a group of beginner Nordic skiers.</li>
                <li>Make a tabletop display or presentation for your crew, another crew, a Cub or Boy Scout unit, or another youth group on Nordic skiing.</li>
            </ol>
            <strong>Snowboarding</strong>
            <ol type="i" class="nestedlist">
                <li>During a winter season, participate in at least six recreational snowboarding sessions totaling 40 hours.</li>
                <li>On one of your ski trips, demonstrate to the adult snowboarding counselor approved by your Advisor that you are proficient in this sport, snowboarding all types of ski terrain, including jumps and other boarding maneuvers.</li>
                <li>Give instruction and assistance to a group of beginner snowboarders.</li>
                <li>Make a tabletop display or presentation for your crew, another crew, a Cub or Boy Scout unit, or another youth group on snowboarding.</li>
            </ol>
            <strong>Snowmobiling</strong>
            <ol type="i" class="nestedlist">
                <li>During a winter season, participate in at least six recreational snowmobiling sessions totaling 40 hours.</li>
                <li>On one of your ski trips, demonstrate to the adult snowmobiling counselor approved by your Advisor that you are proficient in this sport, snowmobiling all types of terrain, and that you can navigate using maps and compass to plan and carry out a trip.</li>
                <li>Give instruction and assistance to a group of beginner snowmobilers.</li>
                <li>Make a tabletop display or presentation for your crew, another crew, a Cub or Boy Scout unit, or another youth group on snowmobiling.</li>
            </ol>
            <strong>Ice Skating</strong>
            <ol type="i" class="nestedlist">
                <li>Participate in at least 10 recreational skating sessions totaling 40 hours.</li>
                <li>On one of your skating trips, demonstrate to the adult skating counselor approved by your Advisor that you are proficient in this sport.</li>
                <li>Give instruction and assistance to a group of beginner skaters.</li>
                <li>Make a tabletop display or presentation for your crew, another crew, a Cub or Boy Scout unit, or another youth group on ice skating.</li>
            </ol>
        </li>
	</ul>
</div>
</div>



<!-- Quest Award -->
<div data-role="page" id="questaward" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#home" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>Quest Award</h1>
    <a href="#questpopup" data-rel="popup" data-transition="pop" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-right ui-shadow ui-corner-all ui-icon-info ui-btn-icon-notext header-button">Handbook</a>
</div>
<div role="main" class="ui-content">
	<p align="center"><img src="/venturingreqs/images/questaward.png" width="100" alt="Quest Award" /></p>
	<ul data-role="listview" data-inset="true" class="ui-nodisc-icon ui-alt-icon">
        <li data-role="list-divider">Core (complete all)</li>
		<li><a href="#quest-core" data-transition="slide">1-5. Core Requirements</a></li>
		<li data-role="list-divider">Electives (complete one)</li>
		<li><a href="#quest-historysports" data-transition="slide" style="white-space:normal;">6. History and Heritage of Sports</a></li>
		<li><a href="#quest-nutrition" data-transition="slide">7. Sports Nutrition</a></li>
        <li><a href="#quest-drugfree" data-transition="slide">8. Drug-Free Sports</a></li>
        <li><a href="#quest-communications" data-transition="slide">9. Communications</a></li>
        <li><a href="#quest-historydisabledsports" data-transition="slide" style="white-space:normal;">10. History and Heritage of the Disabled Sports Movement</a></li>
	</ul>
</div>
    <div data-role="popup" id="questpopup">
        <p>A special Quest Handbook is available for purchase <a href="http://www.scoutstuff.org/quest-handbook-venturing-sports-and-fitness-award.html" target="_blank" style="color:#006B3F;">here</a>.</p>
    </div>
</div>



<!-- Quest Core  -->
<div data-role="page" id="quest-core" data-theme="d">
<div data-role="header" data-position="fixed" class="header-div" data-tap-toggle="false">
    <a href="#questaward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>Quest Core</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li data-role="list-divider">1. Venturing Quest Essentials.</li>
            <li data-role="list-divider" data-theme="f" class="subheading">Complete nine of the following:</li>
            <li class="list-top">a. Demonstrate by means of a presentation at a crew meeting, Cub Scout or Boy Scout meeting, or other group meeting that you know  first aid for injuries or illnesses that could occur while playing sports, including hypothermia; heatstroke; heat exhaustion; frostbite; dehydration; sunburn; blisters, hyperventilation; bruises; strains; sprains; muscle cramps; broken, chipped, loosened, or knocked-out teeth; bone fractures; nausea; and suspected injuries to the back, neck, and head.</li>
            <li class="list-top">b. Write an essay of at least 500 words that explains sportsmanship and tells why it is important. Give several examples of good sportsmanship in sports. Relate at least one of these to everyday leadership off the sports field.<br /><br />OR<br /><br />Make a presentation to your crew or a Cub Scout or Boy Scout unit of at least 30 minutes with the same requirements as for the essay.</li>
            <li class="list-top">c. Take part as a member of an organized team in one of the following sports: baseball, basketball, bowling, cross-country, diving, fencing,  field hockey, football, golf, gymnastics, lacrosse, rugby, skating (ice or roller), soccer, softball, swimming, team handball, tennis, track and field, volleyball, water polo, or wrestling (or any other recognized sport approved in advance by your Advisor except boxing and karate).</li>
            <li class="list-top">d. Organize and manage a sports competition, such as a softball game, between your crew and another crew, between two Cub Scout dens or packs, between two Boy Scout patrols or troops, or between any other youth groups. You must recruit at least two other people to help you manage the competition.</li>
            <li class="list-top">e. Make a set of training rules for a sport you pick. Design an exercise plan including selected exercises for this sport. Determine for this sport the appropriate target heart rates and desired training effects. Follow your training plan for at least 90 days, keeping a record showing your improvement.</li>
            <li class="list-top">f. Make a tabletop display or give a presentation for your crew, another crew, a Cub Scout or Boy Scout unit, or another youth group that explains the attributes of a good team leader and a good team player. Select athletes who exemplify these attributes.</li>
            <li class="list-top">g. Make a display or presentation on a selected sport for your crew or another group covering the following.
                <ol type="i" class="nestedlist">
                    <li>Etiquette for your sport</li>
                    <li>Equipment needed</li>
                    <li>Protective equipment needed and why it is needed</li>
                    <li>History of the sport</li>
                    <li>Basic rules</li>
                </ol>
            </li>
            <li class="list-top">h. Research answers to the following questions. Then, at a crew meeting or other youth group meeting, manage a discussion on drug problems as they relate to athletes.
                <ul class="nestedlist">
                    <li>What drugs are banned?</li>
                    <li>What effect do these banned drugs have on the human body and mind?</li>
                    <li>Where can information about drugs be found?</li>
                    <li>How do some sports organizations fight sports drug abuse?</li>
                    <li>Cover at least the following drugs: stimulants, painkillers, anabolic steroids, beta blockers, diuretics, alcohol, marijuana, and cocaine.</li>
                </ul>
            </li>
            <li class="list-top">i. Research and then, at a crew meeting or other youth group meeting, manage a discussion on recent training techniques being used by world-class athletes. Compare them to training techniques of 25 and 50 years ago. (This discussion must be different from the discussion in requirement g.)</li>
            <li class="list-top">j. Study ways of testing athletes for body density. Fat content can be measured by skin-fold calipers, body measurements, and hydrostatic weighing. Then recruit a consultant to assist you as you determine the body density and fat content for your fellow crew members at a crew meeting or special activity.</li>
            <li class="list-top">k. Select a favorite Olympic athlete, a highly respected athlete in your city, or a favorite professional athlete and research his or her life. Make an oral presentation or tabletop display for your crew or another youth group.</li>
            <li class="list-top">l. Explain the importance of proper nutrition as it relates to training for athletes. Explain the common eating disorders anorexia and bulimia and why they are harmful to athletes.</li>
        <li data-role="list-divider">2. First Aid.</li>
            <li>Complete the American Red Cross Sport Safety Training course (or equivalent) and CPR training.</li>
        <li data-role="list-divider">3. Fitness for Life.</li>
            <li data-role="list-divider" data-theme="f" class="subheading">Complete a or b.</li>
            <li class="list-top">a. Complete the Fitness for Life program (Corbin and Lindsey, published by Human Kinetics, 2002). Check with your Advisor to see if your crew already has the book Fitness for Life. Ask your Advisor about offering the program for you alone, you and some other Venturers, or even your whole crew. You might find the book at your local library. You can order it directly from Human Kinetics at http://www.humankinetics.com.</li>
            <li class="list-top">b. Complete the following:
                <ol type="i" class="nestedlist">
                    <li>Make an appointment with your doctor for a complete physical before beginning any physical conditioning program. Explain to your doctor that you are preparing to undertake a 90-day physical fitness improvement program.</li>
                    <li>Interview healthy older adults about their fitness levels. As part of these interviews, you may want to ask such questions as:
                        <ul class="nestedlist">
                            <li>What kinds of cardiovascular activities do you do?</li>
                            <li>How have your fitness, diet, and physical activity changed over the years?</li>
                            <li>Are you more fit and/or active now than you were five (10, 15, etc.) years ago?</li>
                            <li>Use this data to discuss with your crew and/or another group the importance and benefits of using exercise throughout their lives.</li>
                        </ul>
                    </li>
                    <li>Research and write an essay of 1,500 words or more, or make a presentation to your school, a Cub Scout den or pack, a Boy Scout troop, or a Venturing crew explaining what physical fitness is. Incorporate into this essay or presentation all of the following:
                        <ul class="nestedlist">  
                            <li>Aerobic capacity</li>
                            <li>Endurance</li>
                            <li>Body composition</li>
                            <li>Flexibility</li>
                            <li>Muscle strength</li>
                        </ul>
                    After you have completed your research and written your essay or made your presentation, review your results with a fitness professional or your coach or Advisor.</li>
                    <li>Based upon your essay or presentation on physical fitness, develop a personal physical fitness improvement program and follow it for a minimum of 90 days. After developing your program, review it with your Advisor and/or coach. This fitness improvement program should include the following guidelines:
                        <ul class="nestedlist">
                            <li>Exercise a minimum of three times each week.</li>
                            <li>Complete the Venturing Weekly Exercise Plan and Chart. At the end of each week, review your calendar. Write down the times when you seem to have the most/least energy. Note any environmental conditions or changes in your personal health (cold, flu, fever, etc.) that may have affected your performance. You may want to adjust your schedule.</li>
                            <li>Share this information with your Advisor. You may do some of your exercise workouts as part of your regular physical education class at school.</li>
                        </ul>
                    Note: This may qualify as your area of personal growth for the Venturing Discovery, Pathfinder, or Summit Award.</li>
                    <li>Look though current magazines, articles, and/or videos that feature exercises. Evaluate at least three exercises. Determine how these exercises apply to personal fitness. What level of fitness is required to be able to perform the exercise and what procedures and equipment are necessary for successful completion? Present your findings to your crew and/or another youth group.</li>
                    <li>Learn to calculate the number of calories a person would need who is sedentary, moderately active, or active, for their particular age. Keep a record for 10 days of your food intake and physical activity. How might you adjust your food intake and physical activity to change your percentage of body fat? Write a plan to maintain ideal levels of body fat. Include in this plan the six factors that influence body fatness and share this information with your Advisor and coach.</li>
                    <li>Examine three muscular development exercises and apply biomechanical principles to each. List two reasons why these principles can reduce injuries and discuss this information with your crew or other youth group.</li>
                    <li>Based upon the human desire for peak performance, examine and discuss the physical and psychological activities required for success. As part of this discussion, review with your crew and/or another youth group the following six specific needs (S-P-I-C-E-S) for a balanced approach to achieve this desire:
                         <ul class="nestedlist">
                            <li>Spiritual</li>
                            <li>Physical</li>
                            <li>Intellectual</li>
                            <li>Cultural</li>
                            <li>Emotional</li>
                            <li>Self-Responsibility</li>
                        </ul>
                    Note: S-P-I-C-E-S is supplied from the United States Anti-Doping Agency, http://www.usantidoping.org.</li>
                </ol>
            </li>
        <li data-role="list-divider">4. Fitness Assessment.</li>
            <li class="list-top">Administer the FITNESSGRAM® physical assessment test to your crew, a Cub Scout den or pack, a Boy Scout troop, another Venturing crew, or another youth group.</li>
        <li data-role="list-divider">5. Sport Disciplines.</li>
            <li data-role="list-divider" data-theme="f" class="subheading">Choose a sport from the list below or another sport approved by your Advisor.</li>
            <li class="list-top">a. Develop a profile of a typical athlete in your chosen sport, listing skills and attributes necessary to be proficient. Examples: hand-eye coordination, running speed, quick responses, heavy/light weight, tall/short.</li>
            <li class="list-top">b. Do the following:
                <ol type="i" class="nestedlist">
                    <li>Develop a list of equipment and facilities necessary for your chosen sport:
                        <ul class="nestedlist">
                            <li>Personal equipment such as mouthpiece, helmet, or earplugs</li>
                            <li>Team equipment such foils, shooting jacket, or weights</li>
                            <li>Team or sponsor supplies or facilities such as targets, ammunition, playing courts, or rivers</li>
                        </ul>
                    </li>
                    <li>Discuss the relative importance equipment plays toward your success in that sport. (Certain sports are equipment-intensive, such as bobsled and luge.)</li>
                    <li>Tell how equipment for this sport has improved or changed over time</li>
                </ol>
            </li>
            <li class="list-top">c. Participate and show proficiency in a sport of your choice.</li>
            <li class="list-top">d. For your chosen sport, give a sports clinic to a Cub Scout pack or den, Boy Scout troop, or other youth group. Include a demonstration and skills teaching. You can even include competition when possible.<br /><br />Here are some suggested sports for requirement 5: cycling, sailing,  field sports, swimming, field hockey, synchronized swimming, lacrosse, underwater sports, track and field, water polo, racquet sports, waterskiing, badminton, winter ice sports, handball, bobsled, racquetball, curling, squash, ice hockey, table tennis, luge, tennis, roller sports, speed skating, in-line speed skating, winter snow sports, roller figure skating, biathlon, roller hockey, skiing, skateboarding, snowboarding, target sports, archery, bowling, darts, dance, disc sports, equestrian, shooting, fencing, water sports, martial arts, canoe/kayak, modern pentathlon, diving, orienteering, rowing, team handball, other sports.</li>
        </li>
    </ul>
</div>
</div>



<!-- Quest History and Heritage of Sports -->
<div data-role="page" id="quest-historysports" data-theme="d">
<div data-role="header" data-position="fixed" class="header-div" data-tap-toggle="false">
    <a href="#questaward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>6. History of Sports</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Study the history of the Olympic movement. Learn when and how it started. When did the United States Olympic movement start? When did the winter Olympics start and where? What were the initial games in both summer and winter Olympics? In what Olympic years were there no Olympics and why?</li>
        <li class="list-top">b. Pick a sport you have an interest in and learn the history of that particular sport. Who started the sport and why? How has the sport changed since its beginning? What new equipment has been developed to make the sport more efficient?</li>
        <li class="list-top">c. Make a presentation on what you learned in requirements (a) and (b) above to your crew or a pack, troop, other youth group, retirement home, etc.</li>
    </ul>
</div>
</div>



<!-- Quest Sports Nutrition -->
<div data-role="page" id="quest-nutrition" data-theme="d">
<div data-role="header" data-position="fixed" class="header-div" data-tap-toggle="false">
    <a href="#questaward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>7. Sports Nutrition</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. List at least five complex carbohydrates and five simple carbohydrates. During a crew meeting (or another activity approved by your Advisor and/or coach), discuss with your crew why complex carbohydrates are nutritionally dense and what that means to a sportsperson. Tell why fiber is considered a complex carbohydrate and list some examples of fiber-rich foods. Serve snacks that represent each carbohydrate. You could even make this a game where people guess which snack went with each group.</li>
        <li class="list-top">b. Interview a registered dietician and talk about your favorite sport. Have the dietician help you evaluate and develop a nutritional program that fits you (and/or your team as a whole) and your sport.</li>
        <li class="list-top">c. Make a presentation on “good fats” and “bad fats.” Explain how they affect a teenager’s diet. Include in your presentation information on saturated fats, unsaturated fats, hydrogenated fats, and cholesterol. Use posters, overhead transparencies, computer slide shows, charts, and relevant information from your school health textbook. Working with your crew, calculate fat needs for yourself and the other members of your crew.</li>
        <li class="list-top">d. Keep a three-day food record of everything you eat and drink. If you put it in your mouth, write it down. With the help of a health-care practitioner, determine if you are eating enough protein, vegetables, fat, carbohydrates, and fiber. Also determine the amount of sugar, sodium, and hydrogenated fat consumed. Resources for determining these amounts are available at your local library.</li>
        <li class="list-top">e. People who do not eat meat are called vegetarians. Vegetarians can be categorized into three different groups. In a discussion with your Advisor and/or coach, name those three groups and explain their differences and similarities. In an interview with a registered dietician or nutritionist, ask questions about the complete protein requirements of a vegetarian and how they make sure they are achieving these daily requirements. Using this information, put on a presentation, tabletop display, or other such activity approved by your Advisor and/or coach for a Boy Scout troop or Cub Scout pack.</li>
    </ul>
</div>
</div>



<!-- Quest Drug-Free Sports -->
<div data-role="page" id="quest-drugfree" data-theme="d">
<div data-role="header" data-position="fixed" class="header-div" data-tap-toggle="false">
    <a href="#questaward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>8. Drug-Free Sports</h1>
</div>
<div role="main" class="ui-content">
    <p style="text-shadow:none;">Complete requirements (a) or (b) and two additional subcategories, OR complete requirements (c) and (d).</p>
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Research two classes or categories of prohibited substances in Olympic sport, as listed in the Olympic Movement Anti-Doping Code. (This information can be found at http://www.usantidoping.org.) Develop a paper (minimum 1,000 words) or a presentation that thoroughly addresses the following questions:
            <ul class="nestedlist">
                <li>What legitimate medical purposes is the substance used for?</li>
                <li>What health risks are associated with using and/or abusing the substance?</li>
                <li>How are other people and competition affected if an athlete cheats by using a prohibited substance?</li>
                <li>What consequences do athletes in the sport you identified face when they have been found cheating?</li>
                <li>What is the best training program for an athlete who wants to excel at the sport you chose (e.g., nutrition, workouts, etc.)?</li>
            </ul>
        <li data-role="list-divider" data-theme="f" class="subheading">OR</li>
        <li class="list-top">b. Attend a health class that is at least 15 hours long that focuses on drug-free sport and making decisions about not using drugs in sport. This course could be conducted through your local school, community education system, college/university, sports or athletics, or an online course. Then develop your own multisession drug-free sport health curriculum that you could teach to a youth group.<br /><br />In consultation with your Advisor, do two of the following subcategories:
            <ul class="nestedlist">
                <li>Develop a “fair play,” drug-free sports campaign poster with a slogan and image. Identify at least one facility (sport group, school, church, or community place) at which to post your promotional work. Near the poster, include a box to hold a smaller version (handout) that people can take with them.</li>
                <li>Using a decision-making model, help a group of youth learn how to make a good decision about not using drugs. This should include having them identify a number of issues involved, including health risks and ethics.</li>
                <li>Develop an ethical controversy related to drug use in sport. Lead/facilitate an ethics forum with your crew based upon the ethical controversy you have developed.</li>
                <li>Contact a professional in anti-doping and gather educational information about drug-free sport. Summarize and share the information and resources you gathered.</li>
                <li>Research the history of doping or use of performance-enhancing drugs in sport. Create a timeline summarizing when certain drugs were used, what the drugs were, what the perceived benefit was, and what risks athletes put themselves in by using those drugs.</li>
                <li>Using resources from the U.S. Anti-Doping Agency or another credible current anti-doping source, list all prohibited classes or categories of substances and prohibited methods of doping in Olympic sport (see http://www.usantidoping.org). Briefly identify what the drugs do to the body for each substance class or category. In 500 words, write about why doping is prohibited in sport.</li>
            </ul>
        </li>
        <li data-role="list-divider" data-theme="f" class="subheading">OR do both of the following:</li>
        <li class="list-top">c. With a properly trained crew Advisor, coach, or teacher, attend and complete a national or statewide-recognized course, such as Character Counts—Pursuing Victory With Honor, or ATLAS (Athletes Training and Learning to Avoid Steroids).<br /><br />AND</li>
        <li class="list-top">d. Develop and deliver a presentation on drug-free sports to a youth school or sport group. Design a pamphlet or handout that supports the presentation. You can also use materials available from the U.S. Anti-Doping Agency.</li>
    </ul>
</div>
</div>



<!-- Quest Communications -->
<div data-role="page" id="quest-communications" data-theme="d">
<div data-role="header" data-position="fixed" class="header-div" data-tap-toggle="false">
    <a href="#questaward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>9. Communications</h1>
</div>
<div role="main" class="ui-content">
    <p style="text-shadow:none;">Complete requirements (a), (b) OR (c), (d), (e), (f), and (g) OR (h).</p>
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Take a communications-related training course consisting of at least 15 hours of training and education. This course could be conducted through your local school, community education system, local hospital, college/university, or your own Venturing crew. It could be an official coaching, referee, sport official, and/or athletic trainer program. It could cover such topics as mass communication, sportswriting, technical writing, newspaper editing, film and/or video production, journalism, or coaching. At the conclusion of the training course, review with your Advisor the information and skills taught in this communications course and how they relate to either a particular sports program and/or health and physical fitness in general.</li>
        <li class="list-top">b. Read at least two books approved by your Advisor related to a particular sports program of your choice. Some suggested topics are sports injuries, anti-doping, disabled sports organizations, the U.S. Olympic Committee, the International Olympic Committee, etc. Prepare and submit a written report of not less than 1,000 words on each of these books. The two reports should cover the following items:
            <ul class="nestedlist">
                <li>Why did you pick these books over other written material?</li>
                <li>What are the important communication principles and concepts related to the sport that you picked?</li>
                <li>What are specific ways you can apply these principles in your own sporting activities and/or crew events?</li>
                <li>Present your report to your Advisor and/or crew for review.</li>
            </ul>
        <li class="list-top">c. Interview two or more individuals (coaches, trainers, referees, umpires, college or university sports information directors, sportswriters, reporters, photographers, amateur and/or professional players, therapists, etc.) associated with a particular sport you have an interest in. Prepare an oral and/or written report of at least 1,000 words to your crew and/or another youth group you are associated with detailing the information obtained from these interviews.</li>
        <li class="list-top">d. Make a tabletop display, an oral presentation, or a videotape production for your crew, another crew, a Cub Scout den or pack, Boy Scout troop, or another youth group on the importance of communication in sports. This presentation should emphasize the role that effective communication plays in accurately participating in any sporting event or program.</li>
        <li class="list-top">e. Do the following:
            <ul style="list-style:disk;" class="nestedlist">
                <li>Participate in at least one sports-related ethical controversy. Some examples are:
                    <ul style="list-style:circle;" class="nestedlist">
                        <li>Amateur athletics</li>
                        <li>Drugs and steroids</li>
                        <li>Parental involvement</li>
                        <li>Coaching in youth sports</li>
                        <li>Gambling and betting on sporting events</li>
                        <li>Racial/sexual discrimination/biases</li>
                        <li>Sportsmanship: A dying concept?</li>
                    </ul>
                </li>
                <li>Conduct at least one additional sports-related ethical controversy (separate from the one used above) as part of an ethics forum.</li>
                <li>Along with your crew or another youth group, participate in two cooperative games (one in each category)
                    <ul style="list-style:circle;" class="nestedlist">
                        <li>Outdoor activity game</li>
                        <li>Indoor activity game</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="list-top">f. Prepare a sports communication pamphlet, athletics-related product, or promotional piece emphasizing your BSA local council and/or district sporting event, local school sporting event, or community activity. Some examples are a media and recruiting guide, sports schedule poster and/or schedule card, game program, preseason and post-season media guide, school sports club newsletter, alumni update, game notes for local and/or regional news media, audio/video presentation, or Web site. Include visual as well as written forms of communication in your final product. Have two individuals (one with expertise in this particular sport) review the material and provide written critiques of your work. Make whatever suggested improvements may be suitable based upon this input. Share this information with your Advisor and crew. Then actively promote the event and/or sport with this product.</li>
        <li class="list-top">g. Research the role the media has in a specific sport. Provide an oral report and explain to your Advisor or crew the positive and negative impact the media may have on this particular sport and how a person can deal with the perceived conflicts that may arise.</li>
        <li class="list-top">h. Research the education requirements necessary for a communications/ sports journalism major at your local college and/or university. Prepare a tabletop display or presentation for your crew or another youth group detailing the classes, internships, and career paths available to graduates in this particular major.</li>
    </ul>
</div>
</div>



<!-- Quest History and Heritage of the Disabled Sports Movement -->
<div data-role="page" id="quest-historydisabledsports" data-theme="d">
<div data-role="header" data-position="fixed" class="header-div" data-tap-toggle="false">
    <a href="#questaward" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>10. Disabled Sports</h1>
</div>
<div role="main" class="ui-content">
	<ul data-role="listview" data-inset="true">
        <li class="list-top">a. Study the history of the disabled sports movement (Paralympics).
            <ul class="nestedlist">
                <li>Learn how it started.</li>
                <li>When did the disabled sports movement start?</li>
                <li>When and where would you  nd competitions for disabled athletes?</li>
                <li>What disabled sports games are included in the summer and
                winter Paralympics?</li>
            </ul>
        </li>
        <li class="list-top">b. Pick a disabled sport you have an interest in and learn its history. 
            <ul class="nestedlist">
                <li>Who started that disabled sport and why?</li>
                <li>How has the sport changed since its beginning?</li>
                <li>What specialized equipment is used by disabled athletes?</li>
            </ul>
        </li>
        <li class="list-top">c. Using what you learned in requirements (a) and (b) above, plan and run a disabled sports awareness clinic for your crew, a Cub Scout den or pack, Boy Scout troop, other youth group, etc. Examples:
            <ul class="nestedlist">
                <li>Wheelchair basketball</li>
                <li>Goal ball for blind athletes</li>
                <li>Sledge hockey</li>
                <li>Murder ball (rugby for quadriplegics)</li>
            </ul>
        </li>
    </ul>
</div>
</div>



<!-- TRUST Award -->
<div data-role="page" id="trustaward" data-theme="d">
<div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-div">
    <a href="#home" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-left ui-shadow ui-corner-all ui-icon-delete ui-icon-carat-l ui-btn-icon-notext header-button" data-rel="back">Back</a>
    <h1>TRUST Award</h1>
    <a href="#trustpopup" data-rel="popup" data-transition="pop" class="ui-nodisc-icon ui-alt-icon ui-btn ui-btn-right ui-shadow ui-corner-all ui-icon-info ui-btn-icon-notext header-button">Handbook</a>
</div>
<div role="main" class="ui-content">
	<p align="center"><img src="/venturingreqs/images/trustaward.png" width="100" alt="Trust Award" /></p>
	<ul data-role="listview" data-inset="true" class="ui-nodisc-icon ui-alt-icon">
        <li data-role="list-divider">1. Venturing TRUST essentials.</li>
        <li data-role="list-divider" data-theme="f" class="subheading">Complete nine of the following:</li>
        <li class="list-top">a. Earn your denomination’s Venturing-age religious award. For information about the religious awards program, see the Duty to God brochure, No. 512-879.</li>
        <li class="list-top">b. Complete either (i) and (ii) OR (iii) and (iv).
            <ol type="i" class="nestedlist">
                <li>Learn about cultural diversity.</li>
                <li>Make a presentation or tabletop display using the information you learned in (i) above.<br /><br />OR</li>
                <li>Invite someone from a different cultural background from yours and the majority of your crew’s members to give a presentation on a subject of his or her choosing. Introduce your guest.</li>
                <li>Participate in a discussion about cultural diversity with your crew, Sunday school class, or other group.</li>
            </ol>
        </li>
        <li class="list-top">c. Plan and lead a service project such as helping to build a Habitat for Humanity house, participating in a community cleanup project, or taking on a fix-up project for a nursing home or nursery.</li>
        <li class="list-top">d. Complete the following:
            <ol type="i" class="nestedlist">
                <li>Serve as a volunteer in your place of worship or other nonprofit organization for at least three months.</li>
                <li>Keep a personal journal of your experiences each time you worked as a volunteer.</li>
                <li>After you have served as a volunteer for at least three months, share your experiences and how you feel about your service with others.</li>
            </ol>
        </li>
        <li class="list-top">e. Attend a religious retreat or religious trek lasting at least two days.</li>
        <li class="list-top">f. Produce or be a cast member in some type of entertainment production with a religious or ethical theme, such as a play, puppet show, or concert for a group such as a children’s group, retirement home, homeless shelter, or Cub Scout or Boy Scout unit.</li>
        <li class="list-top">g. Serve as president, leader, or officer of your Sunday school class or youth group.</li>
        <li class="list-top">h. Complete a standard first-aid course or higher course or its equivalent.</li>
        <li class="list-top">i. Complete the following:
            <ol type="i" class="nestedlist">
                <li>Participate in at least two ethical controversy activities.</li>
                <li>Be a facilitator for at least two ethical controversy activities for your crew, another crew, your school class, a Boy Scout troop, or another group.</li>
                <li>Lead or be a staff member putting on an ethics forum for your crew, your place of worship, or your school class.</li>
            </ol>
        </li>
        <li class="list-top">j. Serve as a Sunday school teacher or assistant for a children’s Sunday school class for at least three months, or as a volunteer for a church/synagogue children’s activity such as vacation Bible school. (This volunteer service must be different from requirement (d) above.)</li>
        <li class="list-top">k. Meet with your place of worship’s minister/rabbi/leader to find out what he or she does, what they had to do to become your leader, and what they think is the most important element of the job.</li>
        <li data-role="list-divider">2. Tending Your Beliefs.</li>
        <li data-role="list-divider" data-theme="f" class="subheading">Complete the following:</li>
        <li class="list-top">a. Visit with your religious leader and discuss your beliefs and why you accept those beliefs. Compare your personal beliefs with those formally accepted by your religion. Following this discussion, write an essay explaining your beliefs and review it with your religious leader and your crew Advisor. Make a 15- to 20-minute presentation (discussion, video, slideshow, etc.) to your crew or another youth group explaining your beliefs.</li>
        <li class="list-top">b. Explain the Scout Oath and Scout Law in your own words. Explain how they have an effect on your daily life, your life goals, and how you live your life as a part of your community.</li>
        <li data-role="list-divider">3. Respecting the Beliefs of Others.</li>
        <li data-role="list-divider" data-theme="f" class="subheading">Complete the following:</li>
        <li class="list-top">a. Talk with a history/social studies teacher, attorney or other legal professional, or other knowledgeable adult about the U.S. Bill of Rights, and especially about the concept of freedom of religion. What did this concept mean to our founding fathers? What does this concept mean today? What limitations have been imposed on this freedom? What happens when freedom of religion and freedom of speech clash with each other? Hold a discussion (not debate) about freedom of religion with members of your crew.</li>
        <li class="list-top">b. Find out what religious groups are worshipping in your community and whether they have been there for generations or whether they are relatively new to the community. Talk to at least five adults in your community about the impact various religions have on your community. Report your findings to your crew.</li>
        <li class="list-top">c. Complete one of the following:
            <ol type="i" class="nestedlist">
                <li>Pick one of the religions listed in this chapter (other than your own). After extensive research on the selected religion, present a report to your crew or other youth group (such as a troop, crew, religious group, or school group). The report should detail the history of the religion, its modern application as a religion, and important historical events. Also include information about where and how the religion is commonly practiced.</li>
                <li>Attend a religious service/gathering/festival of one of the religions (other than your own religion). Attend with a parent, Advisor, or religious professional. Write about your experience and how it relates to the thoughts and practices of the religion. Compare the basic tenets expressed in the religious service/gathering/ festival with those of your own religion.</li>
                <li>Meet with two youth working on a religious emblem approved by the BSA (not your own religion). These young people can be members of the Boy Scouts of America, Girl Scouts of the USA, or any other youth organization. Discuss with them their current religious journey.</li>
                <li>Contact an official in an inter-religious organization (interfaith coalition, council of churches, etc.). Discuss how religious tolerance is important in both local and global issues.</li>
                <li>Attend an inter-religious festival and talk with two people from another religion about the similarities and differences between your religion and theirs. Report your findings to your religious leader.</li>
            </ol>
        </li>
        <li data-role="list-divider">4. Understanding Other Cultures.</li>
        <li data-role="list-divider" data-theme="f" class="subheading">Complete the following:</li>
        <li class="list-top">a. Learn about the culture you most identify with. Talk to relatives or other knowledgeable individuals to learn about your family history, cultural identity, and family identity.</li>
        <li class="list-top">b. Attend two cultural events (each of these events should represent a different culture and should highlight the history and uniqueness of that culture). Supplement the information you learned at the events with research on the culture in today’s global society. Compare these two events and their cultures with your own culture. Report on your findings to your crew or another youth organization. Invite an adult and a youth from another culture to speak to your crew about their culture. Alternately, interview two people who were born outside the United States who have immigrated to your community or a nearby one (foreign exchange students may also fulfill this role). In either case, discuss with them why they decided to come to the United States and to your community. Discuss the differences in community between where they live now and where they lived before they emigrated. (For Venturers living outside the United States, modify this requirement for the country in which you reside. For example, a Venturer living in Japan would interview someone not of Japanese origins who immigrated to Japan.)</li>
        <li class="list-top">c. Do one of the following:
            <ol type="i" class="nestedlist">
                <li>Take (and successfully pass) a course that includes study of cultural diversity.
                <li>Research and present your findings about an inter-religious/ intercultural conflict affecting the world in historical or current times. Include how the conflict started and ended (if not an ongoing conflict). Explore both causes and effects of the conflict, including those in the current day. Include general information about all the cultures and religions involved in the conflict.</li>
                <li>Research a cultural group (other than your own) that has had an impact on the U.S. melting pot. When did they begin to arrive? In what ways have they had an in uence on the United States? On your community? Where have they settled (primarily); why? Report on your findings to your crew or youth group.</li>
                <li>Meet with your council all-markets executive to learn which all-markets programs are being used in your area and why. Learn about BSA resources designed for speci c cultural groups and how they may differ from the resources you are familiar with.</li>
            </ol>
        </li>
        <li data-role="list-divider">5. Serving Your Community.</li>
        <li data-role="list-divider" data-theme="f" class="subheading">Complete the following:</li>
        <li class="list-top">a. Plan and carry out a service project to better your local community. This project should be carried out in conjunction with an established community service agency. Involve at least five other Venturers or youth in carrying out the project. The project should be well thought out and lasting in its effects. Use the Summit Award Service Project workbook as a guideline (available online at www.scouting.org/venturing).</li>
        <li class="list-top">b. Meet with a member of your local government. Discuss how the community governs itself on matters such as zoning, taxes, education, religion, and acceptable behavior. Report your dondings to your crew or another youth group. Lead or participate in a discussion on ideas to change your community for the better.</li>
        <li class="list-top">c. Do one of the following:
            <ol type="i" class="nestedlist">
                <li>Organize a community safety program. Options include a community watch program, a latchkey program, or other program to encourage safety in your community. This cannot be the same project used for requirement (a) above.</li>
                <li>Work with your local chapter of the Alpha Phi Omega service fraternity. Participate in a significant percentage of service opportunities for one semester. Discuss with the fraternity advisor how to increase cooperation between the group and the BSA local council, and between the group and other student organizations at your college.</li>
                <li>Serve as an active member in a high school or college community service organization. Participate in a significant percentage of service projects for a six-month period. Explore ways to increase the participation of your organization in service opportunities, as well as ways to increase the membership of the organization. Report on how the group benefits the community.</li>
                <li>Become a volunteer first-aid or swimming instructor or swimming aide with the American Red Cross or a similar organization. Teach  first aid or swimming at least four times in a six-month period. Explore other volunteer opportunities with that organization. Report on your experiences at the end of this time, especially how the community benefits from the organization and from your volunteerism.</li>
                <li>Participate for six months as an active volunteer with any other community service agency approved by your Advisor. Examples are therapy or guide dogs, food pantries, hospital aides, etc. Report on your experiences at the end of this time, especially how the community benefits from the organization and from your volunteerism.</li>
            </ol>
        </li>
        <li data-role="list-divider">6. Transforming Our Society.</li>
        <li data-role="list-divider" data-theme="f" class="subheading">Complete the following:</li>
        <li class="list-top">a. Take part in a counseling skills training session of at least eight total hours. Examples include peer counseling, suicide or abuse hotlines, and first-contact training programs, and may be provided by local service agencies/hotlines or by local government divisions. Tell your crew what you learned and how you plan to put your knowledge into action.</li>
        <li class="list-top">b. Discover (through research, discussions with teachers or community leaders) what addictions are having a negative effect on your local community (such as alcohol, drugs, tobacco, gambling, pornography, etc.). Pick one of these and find out what local resources are available to deal with the problem. Talk to a counselor who deals with this issue, and tell your crew how this issue is affecting the community in which you live.</li>
        <li class="list-top">c. Lead or actively participate in at least four ethical controversies within a six-month period. These may be at the unit, district, or council level within Venturing, or at a youth event attended by members of several churches or religious institutions.</li>
        <li class="list-top">d. Do one of the following:
            <ol type="i" class="nestedlist">
                <li>Attend a meeting of your local board of education or city/community council or a session of court (any level open to public observation). Find one issue that has generated dissent or conflict, and observe how this conflict is dealt with. Follow the issue to its resolution, even if this means attending more meetings. Give a presentation to your crew or other youth group on how conflict was resolved in this case.</li>
                <li>Visit and tour a correctional facility. Talk to a correctional facility chaplain about his or her responsibilities and experiences. Ask the chaplain for stories of success/transformation that have helped former inmates become contributing members of society.</li>
                <li>Compare counseling degree programs at four different colleges or universities. Include one large public university and one small religiously based college. Look at both the types of degrees offered and the course work required for those degrees. Compare especially the religious components of such degrees.</li>
                <li>Study the document “Scouts and Peace” prepared by the World Organization of the Scout Movement. Lead a discussion with your crew about the document and how Scouts can be involved in world peace. Then prepare a 10-minute presentation on the document and give it to a Boy Scout or Girl Scout troop.</li>
            </ol>
        </li>
	</ul>
</div>
    <div data-role="popup" id="trustpopup">
        <p>A special TRUST Handbook is available for purchase <a href="http://www.scoutstuff.org/venturing-trust-award-handbook.html" target="_blank" style="color:#006B3F;">here</a>.</p>
    </div>
</div>


</body>
</html>