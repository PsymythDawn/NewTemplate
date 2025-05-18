const input = document.getElementById('person');
    const roulette = document.getElementById('roulette');
    const rouletteTrack = document.getElementById('rouletteTrack');
    const okBtn = document.getElementById('okBtn');

    const maxGuests = 51;

    function createRoulette() {
      for (let i = 0; i < 2; i++) {
        const bufferItem = document.createElement('div');
        bufferItem.className = 'roulette-item buffer';
        bufferItem.innerHTML = '&nbsp;';
        rouletteTrack.appendChild(bufferItem);
      }

      for (let i = 1; i <= maxGuests; i++) {
        const item = document.createElement('div');
        item.className = 'roulette-item';
        item.textContent = i;
        item.dataset.value = i;
        rouletteTrack.appendChild(item);
      }

      for (let i = 0; i < 2; i++) {
        const bufferItem = document.createElement('div');
        bufferItem.className = 'roulette-item buffer';
        bufferItem.innerHTML = '&nbsp;';
        rouletteTrack.appendChild(bufferItem);
      }
    }

    function updateSelection() {
      const items = document.querySelectorAll('.roulette-item:not(.buffer)');
      const middlePosition = rouletteTrack.scrollTop + 40 * 2 + 20; // 3rd item center

      items.forEach(item => {
        item.classList.remove('selected');
        const itemCenter = item.offsetTop + item.offsetHeight / 2;
        const distance = Math.abs(itemCenter - middlePosition);

        if (distance < item.offsetHeight / 2) {
          item.classList.add('selected');
          input.value = item.dataset.value;
        }
      });
    }

    input.addEventListener('click', () => {
      roulette.classList.add('active');

      const currentValue = parseInt(input.value) || 1;
      const targetItem = document.querySelector(`.roulette-item[data-value="${currentValue}"]`);

      if (targetItem) {
        const itemHeight = targetItem.offsetHeight;
        rouletteTrack.scrollTop = targetItem.offsetTop - itemHeight * 2;
      } else {
        const firstItem = document.querySelector('.roulette-item:not(.buffer)');
        if (firstItem) {
          rouletteTrack.scrollTop = firstItem.offsetTop - firstItem.offsetHeight * 2;
        }
      }

      updateSelection();
    });

    okBtn.addEventListener('click', () => {
      roulette.classList.remove('active');
    });

    let scrollTimeout;
    rouletteTrack.addEventListener('scroll', () => {
      updateSelection();

      clearTimeout(scrollTimeout);
      scrollTimeout = setTimeout(() => {
        const selected = document.querySelector('.roulette-item.selected');
        if (selected) {
          const itemHeight = selected.offsetHeight;
          rouletteTrack.scrollTop = selected.offsetTop - itemHeight * 2;
        }
      }, 100);
    });

    createRoulette();
    input.value = 1;