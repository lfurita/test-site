// Copyright (c) 2022 Ivan Teplov

//let $ = document.querySelector.bind(document);

const openSheetButton = $("#open-sheet");
const sheet = $("#sheet");
const sheetContents = $(".contents");
const draggableArea = $(".draggable-area");

let sheetHeight; // in vh

const setSheetHeight = (value) => {
  sheetHeight = Math.max(0, Math.min(100, value))
  sheetContents.css('height', sheetHeight+'vh');

  if (sheetHeight === 100) {
    sheetContents.addClass("fullscreen");
  } else {
    sheetContents.removeClass("fullscreen");
  }
}

const setIsSheetShown = function(value) {
  sheet.attr("aria-hidden", String(!value));
}

// Open the sheet when clicking the 'open sheet' button
$(document).on('click','#open-sheet', function() {
  setSheetHeight(Math.min(50, 720 / window.innerHeight * 100))
  setIsSheetShown(true);
});

$(document).on('click','.close-sheet', function() {
  setIsSheetShown(false);
});

// Hide the sheet when clicking the background
$(document).on('click','.overlay', function() {
  setIsSheetShown(false);
})

const touchPosition = function(event) {
  if(event.originalEvent) {
    return event.originalEvent[0];
  } else {
    return event;
  }
}

let dragPosition;

const onDragStart = function(event) {
  dragPosition = touchPosition(event).pageY;
  sheetContents.addClass("not-selectable");
  draggableArea.css("cursor", "grabbing");
  document.body.style.cursor = "grabbing";
}

const onDragMove = function(event) {
  if (dragPosition === undefined) return;

  const y = touchPosition(event).pageY;
  const deltaY = dragPosition - y;
  const deltaHeight = deltaY / window.innerHeight * 100;

  setSheetHeight(sheetHeight + deltaHeight);
  dragPosition = y;
}

const onDragEnd = () => {
  dragPosition = undefined;
  sheetContents.removeClass("not-selectable");
  draggableArea.css("cursor", "");
  document.body.style.cursor = "";

  if (sheetHeight < 25) {
    setIsSheetShown(false);
  } else if (sheetHeight > 75) {
    setSheetHeight(100);
  } else {
    setSheetHeight(50);
  }
}

//draggableArea.addEventListener("mousedown", onDragStart);
//draggableArea.addEventListener("touchstart", onDragStart);

$(document).on('mousedown','.draggable-area', function() {
  onDragStart();
});

$(document).on('touchstart','.draggable-area', function() {
  onDragStart();
});

window.addEventListener("mousemove", onDragMove);
window.addEventListener("touchmove", onDragMove);

window.addEventListener("mouseup", onDragEnd);
window.addEventListener("touchend", onDragEnd);
