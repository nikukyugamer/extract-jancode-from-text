function showResult() {
  $(document).on('click', '#extract', function() {
    let inputText         = $('#input-text').val();
    let targetNumberArray = extractTargetNumberArray(inputText);
    let validNumberArray  = createValidNumberArray(targetNumberArray);
    let resultText        = validNumberArray.join('\n');

    $('#output-text').text(resultText);
  });
}

function extractTargetNumberArray(text) {
  let pattern = /\d+/g;
  let result = text.match(pattern);

  return result;
}

function createValidNumberArray(numberArray) {
  if(numberArray == null) {
    return [];
  }

  let validNumberArray = [];

  for(let i = 0; i < numberArray.length; i++) {
    if(numberIsValid(numberArray[i])) {
      validNumberArray.push(numberArray[i]);
    }
  }
  return validNumberArray;
}

function numberIsValid(number) {
  // TODO: この関数の中で定義しない方がよさそう
  let patterns = [
    /^[4][5][0-9]{11}$/,
    /^[4][9][0-9]{11}$/
  ];

  for(let i = 0; i < patterns.length; i++) {
    if (number.match(patterns[i])) {
      return true;
    }
  }

  return false;
}

showResult();
