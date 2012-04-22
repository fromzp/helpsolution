/*<style type="text/css">
     cusel.css */
    
@charset "utf-8";
/*
	styles for select
*/
.cusel,
.cuselFrameRight,
.jScrollPaneDrag,
.jScrollArrowUp,
.jScrollArrowDown {
	background: url(../img/cusel/selects-2.png) no-repeat;
}
.cusel { /* общий вид селекта включая стрелку справа */
	height: 26px;
	background-position: left top;
	display: inline-block;
	position: relative;
	cursor: pointer;
	font-size: 14px;
	z-index: 1;
}
.cuselFrameRight { /* левая чсть селект. обыно скругление и левая граница */
	position: absolute;
	z-index: 2;
	top: 0;
	right: 0;
	height: 100%;
	width: 22px;
	background-position: right top;
}

.cuselText { /* контейнер для отображенного текста селект */
	height: 14px;
	padding: 6px 0 0 7px; /* подбираем отступы и высоту для видимого текста в селекте */
	cursor: pointer;
	overflow: hidden;
	position: relative;
	z-index: 1;
	font: 12px Arial, "Helvetica CY", "Nimbus Sans L", sans-serif; /* шрифты */
	position: absolute;
	top: 0;
	left: 0;
}
* html .cuselText { /* высота блока для текста для ие6 */
	height: 22px;
}
.cusel span { /* оформление оптиона */
	display: block;
	cursor: pointer;
	white-space: nowrap;
	padding: 2px 15px 2px 5px; /* паддинг справа - это отступ текста от ползунка */
	zoom: 1;
}
.cusel span:hover,
.cusel .cuselOptHover { /* реакция оптиона на наведение */
	background: #003399;
	color: #fff;
}
.cusel .cuselActive { /* оформление активного оптиона в списке */
	background: #CC0000;
	color: #fff;
	cursor: default;
}

/*
	styles for focus and hover
*/
.cusel:hover,
.cusel:hover .cuselFrameRight,
.cusel:focus,
.cusel:focus .cuselFrameRight,
.cuselFocus,
.cuselFocus .cuselFrameRight {
	background-image: url(../img/cusel/selects-focus.png);
}

.cuselOpen {
	z-index: 999;
}

/*
	styles for disabled select
*/
.classDisCusel,
.classDisCusel .cuselFrameRight {
	background-image: url(../img/cusel/selects-2-dis.png) !important;
	cursor: default;
	color: #ccc;
}
.classDisCusel .cuselText {
	cursor: default;
}


/*
	styles for scrollbar
*/
.cusel .cusel-scroll-wrap { /* контейнер для блока с прокруткой */
	display: block;
	visibility: hidden;
	position: absolute;
	left: 0;
	top: 100%;
	background: #fff; /* фон выпадающего списка */
	min-width: 100%;
	width: auto;
}
.cusel .jScrollPaneContainer {
	position: relative;
	overflow: hidden;
	z-index: 5;
	border: 1px solid #999; /* границы выпадающего спиcка */
}

.cusel .jScrollPaneTrack { /* трек для ползунка прокрутки */
	height: 100%;
	width: 7px !important;
	background: #ccc;
	position: absolute;
	top: 0;
	right: 4px;
}
.cusel .jScrollPaneDrag { /* ползунок */
	position: absolute;
	background-position: -40px -26px;
	cursor: pointer;
	width: 15px !important;
	height: 27px !important;
	right: -4px;
	
}

.cusel .jScrollPaneDragTop {
	position: absolute;
	top: 0;
	left: 0;
	overflow: hidden;
}
.cusel .jScrollPaneDragBottom {
	position: absolute;
	bottom: 0;
	left: 0;
	overflow: hidden;
}
.cusel .jScrollArrowUp { /* стрелка вверх */
	position: absolute;
	top: 0;
	right: 2px;
	width: 26px;
	height: 12px;
	cursor: pointer;
	background-position: -2px -26px;
	overflow: hidden;
}
.cusel .jScrollArrowDown { /* стрелка вниз */
	width: 25px;
	height: 12px;
	position: absolute;
	top: auto;
	bottom: 0;
	right: 3px;
	cursor: pointer;
	background-position: -21px -26px;
	overflow: hidden;
}
/*</style>*/