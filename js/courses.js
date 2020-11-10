/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu
4. Init Header Search
5. Init Colorbox


******************************/

$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var header = $('.header');
	var menuActive = false;
	var menu = $('.menu');
	var submenu_hsp = $('.hsp');
	var submenu_lsp = $('.lsp');
	var menu_child_1 = $('.menu_nav');
	var menu_child_2 = $('.sub_menu_nav');
	var hieusp_child = $('.sub_menu_hsp');
	var loaisp_child = $('.sub_menu_lsp');
	var btn_back = $('.btn_back');
	var burger = $('.hamburger');

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	initMenu();
	initHeaderSearch();
	initColorbox();

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if($(window).scrollTop() > 100)
		{
			header.addClass('scrolled');
		}
		else
		{
			header.removeClass('scrolled');
		}
	}

	/* 

	3. Init Menu

	*/

	function initMenu()
	{
		if($('.menu').length)
		{
			var menu = $('.menu');
			var submenu_hsp = $('.hsp');
			var submenu_lsp = $('.lsp');
			var menu_child_1 = $('.menu_nav');
			var menu_child_2 = $('.sub_menu_nav');
			var hieusp_child = $('.sub_menu_hsp');
			var loaisp_child = $('.sub_menu_lsp');
			var btn_back = $('.btn_back');
			
			if($('.hamburger').length)
			{
				burger.on('click', function()
				{
					if(menuActive)
					{
						closeMenu();
					}
					else
					{
						openMenu();

						$(document).one('click', function cls(e)
						{
							if($(e.target).hasClass('menu_mm'))
							{
								submenu_lsp.on('click',function(){
										openSubMenu(1);
									});
									submenu_hsp.on('click',function(){
										openSubMenu(2);
									});
								btn_back.on('click',function()
										   {
									closeSubMenu();
								});
									$(document).one('click', cls);
								
							} else
							{	
								closeMenu();
							}
						});
					}
				});
			}
		}
	}

	function openMenu()
	{
		menu.addClass('active');
		menu_child_1.addClass('active');
		menuActive = true;
	}

	function closeMenu()
	{
		menu.removeClass('active');
		menu_child_1.removeClass('active');
		hieusp_child.removeClass('active');
		loaisp_child.removeClass('active');
		menuActive = false;
	}
	function openSubMenu(orderby) 
	{
		menu_child_1.removeClass('active');
		if (orderby === 1)
		{
			loaisp_child.addClass('active');
		} else if (orderby === 2)
		{
			hieusp_child.addClass('active');
		}
	}
	function closeSubMenu()
	{
		menu_child_2.removeClass('active');
		menu_child_1.addClass('active');
	}

	/* 

	4. Init Header Search

	*/

	function initHeaderSearch()
	{
		if($('.search_button').length)
		{
			$('.search_button').on('click', function()
			{
				if($('.header_search_container').length)
				{
					$('.header_search_container').toggleClass('active');
				}
			});
		}
	}

	/*

	5. Init Colorbox

	*/

	function initColorbox()
	{
		if($('.gallery_item').length)
		{
			$('.colorbox').colorbox(
			{
				rel:'colorbox',
				photo: true,
				maxWidth: '90%'
			});
		}
	}

});