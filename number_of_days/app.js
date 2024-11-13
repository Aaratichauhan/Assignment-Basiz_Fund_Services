function calculateDifference() {
  const date1 = new Date(document.getElementById('date1').value);
  const date2 = new Date(document.getElementById('date2').value);
  
  if (date1 && date2) {
      const timeDifference = Math.abs(date2.getTime() - date1.getTime());
      const daysDifference = Math.ceil(timeDifference / (1000 * 3600 * 24));
      
      document.getElementById('result').innerText = `${daysDifference} Days\n${numberToWords(daysDifference)} Days`;
  } else {
      document.getElementById('result').innerText = "Please enter both dates.";
  }
}

function numberToWords(number) {
  const ones = ['','one','two','three','four','five','six','seven','eight','nine'];
  const teens = ['eleven','twelve','thirteen','fourteen','fifteen','sixteen','seventeen','eighteen','nineteen'];
  const tens = ['','ten','twenty','thirty','forty','fifty','sixty','seventy','eighty','ninety'];
  const thousands = ['','thousand','million','billion','trillion'];

  let word = '';
  
  function convertToWords(num) {
      let str = '';
      if (num > 0 && num < 10) str = ones[num];
      else if (num > 10 && num < 20) str = teens[num - 11];
      else if (num >= 10) str = tens[Math.floor(num / 10)] + " " + ones[num % 10];
      return str.trim();
  }

  function chunk(num) {
      const strNum = num.toString();
      const length = strNum.length;
      let chunks = [];
      for (let i = length; i > 0; i -= 3) {
          let start = (i - 3) >= 0 ? i - 3 : 0;
          chunks.push(parseInt(strNum.slice(start, i), 10));
      }
      return chunks;
  }

  const numChunks = chunk(number).reverse();
  numChunks.forEach((num, index) => {
      if (num !== 0) {
          const chunkWords = convertToWords(num);
          word += `${chunkWords} ${thousands[index]} `;
      }
  });
  
  return word.trim();
}
