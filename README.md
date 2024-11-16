# Segnacarte Scopa

**Segnacarte Scopa** è un'applicazione web progettata per facilitare il tracciamento delle carte giocate durante una partita di Scopa. L'applicazione utilizza un'interfaccia intuitiva per visualizzare e nascondere le carte tramite clic.



## **Caratteristiche principali**

- **Visualizzazione dinamica delle carte:** Le immagini delle carte vengono caricate dinamicamente dalla cartella `img` e visualizzate nella pagina.
- **Interazione semplice:** Cliccando su una carta, l'immagine passa a una carta nascosta (`bg.jpg`) o torna visibile.
- **Compatibilità mobile:** Design responsive grazie all'uso di Bootstrap per adattarsi a dispositivi con schermi di dimensioni ridotte.
- **Ordinamento personalizzato:** Le carte vengono ordinate in base all'ultima lettera del nome del file e, in caso di parità, per numero.



## **Struttura del progetto**

- **`index.html`:** La pagina principale dell'applicazione.
- **`data.php`:** Script PHP che legge il contenuto della cartella `img` e restituisce un elenco ordinato dei file come JSON.
- **`img/`:** Cartella contenente le immagini delle carte e un file `bg.jpg` utilizzato per nascondere le carte.



## **Prerequisiti**

- Un server web con supporto per PHP (ad esempio, Apache o Nginx).
- Cartella `img` con le immagini delle carte da visualizzare.
- File `bg.jpg` nella cartella `img` per rappresentare il dorso delle carte.



## **Guida all'installazione**

1. Clona il repository o scarica il progetto.
    ```bash
    git clone https://github.com/masonedotcloud/segnacarte-scopa.git
    ```
2. Posiziona il progetto in una directory accessibile dal tuo server web (es. `htdocs` per XAMPP).
3. Assicurati che la cartella `img` contenga i file immagine delle carte e il file `bg.jpg`.
4. Avvia il server web e accedi all'applicazione tramite il browser:
    ```
    http://localhost/segnacarte-scopa
    ```



## **Utilizzo**

1. Apri l'applicazione nel browser.
2. Le carte verranno caricate e visualizzate automaticamente.
3. Clicca su una carta per nasconderla o mostrarla:
   - **Carta visibile:** Mostra l'immagine della carta.
   - **Carta nascosta:** Mostra il dorso della carta (`bg.jpg`).



## **Tecnologie utilizzate**

- **Frontend:**
  - HTML5, CSS3
  - Bootstrap 5 per il design responsivo
  - jQuery per la manipolazione DOM e le richieste AJAX
- **Backend:**
  - PHP per la generazione dinamica del file JSON


## **Contributi**

Se vuoi contribuire:
1. Fai un fork del repository.
2. Crea un branch per le modifiche.
3. Invia una pull request.

## Licenza

Questo progetto è distribuito sotto la Licenza MIT - vedi il file [LICENSE](LICENSE) per ulteriori dettagli.


## Autore

Questo progetto è stato creato da [alessandromasone](https://github.com/alessandromasone).