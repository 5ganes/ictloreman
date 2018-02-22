<?php
	echo password_hash('ictan_krishighar_123_#', PASSWORD_DEFAULT);


	// $host = "localhost";
	// $uname = "root"; 		
	// $psw = "";					
	// $dbname = "ictan";
	// $links = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $uname,$psw);

	// $criteria = [
	// 	'name' => 'test',
	//     'nameen' => 'sdf',
	//     'urlname' => 'sdf',
	//     'type' => 'Header',
	//     'parentId' => 444,
	//     'linkType' => 'test',
	//     'shortcontents' => 'sfsef',
	//     'shortcontentsen' => 'sdfsdfdsfsd',
	//     'contents' => 'sdfsdffdfsd',
	//     'contentsen' => 'etetrertw',
	//     'weight' => 11,
	//     'pageTitle' => 'sfdsfsdfdsfds', 
	//     'pageKeyword' => 'erwererttr',
	//     'featured' => 'Yes',
	//     'display' => 'Yes'
	// ];

	// $stmt = $links->prepare("INSERT INTO groups 
	// 				SET
	// 					name = :name,
	// 					nameen = :nameen,
	// 					urlname = :urlname,
	// 					type = :type,
	// 					parentId = :parentId,
	// 					linkType = :linkType,
	// 					shortcontents = :shortcontents,
	// 					contents = :contents,
	// 					shortcontentsen = :shortcontentsen,
	// 					contentsen = :contentsen,
	// 					weight = :weight,
	// 					pageTitle = :pageTitle,
	// 					pageKeyword = :pageKeyword,
	// 					featured = :featured,
	// 					display = :display,
	// 					onDate = NOW()");

	// $stmt->execute($criteria);


	INSERT INTO groups SET
						name = :name,
						nameen = :nameen,
						urlname = :urlname,
						type = :type,
						parentId = :parentId,
						linkType = :linkType,
						shortcontents = :shortcontents,
						shortcontentsen = :shortcontentsen,
						contents = :contents,
						contentsen = :contentsen,
						weight = :weight,
						pageTitle = :pageTitle,
						pageKeyword = :pageKeyword,
						featured = :featured,
						display = :display,
						onDate = NOW()Array
(
    [name] => test
    [nameen] => test eng
    [urlname] => sdfsdfd
    [type] => Header
    [parentId] => 
    [linkType] => 
    [shortcontents] => sdf
    [shortcontentsen] => sdfsdfdf
    [contents] => sdfsdf
    [contentsen] => sdfsd wef fs few efewwfwfwf wwefwe
    [weight] => 
    [pageTitle] => 
    [pageKeyword] => 
    [featured] => 
    [display] => 
)