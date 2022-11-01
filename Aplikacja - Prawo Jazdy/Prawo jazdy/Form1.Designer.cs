namespace Prawo_jazdy
{
    partial class Prawo_Jazdy
    {
        /// <summary>
        /// Wymagana zmienna projektanta.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Wyczyść wszystkie używane zasoby.
        /// </summary>
        /// <param name="disposing">prawda, jeżeli zarządzane zasoby powinny zostać zlikwidowane; Fałsz w przeciwnym wypadku.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Kod generowany przez Projektanta formularzy systemu Windows

        /// <summary>
        /// Metoda wymagana do obsługi projektanta — nie należy modyfikować
        /// jej zawartości w edytorze kodu.
        /// </summary>
        private void InitializeComponent()
        {
            this.panel1 = new System.Windows.Forms.Panel();
            this.mtxtT = new System.Windows.Forms.MaskedTextBox();
            this.lSpec = new System.Windows.Forms.Label();
            this.lPodst = new System.Windows.Forms.Label();
            this.lNrPytaniaSpec = new System.Windows.Forms.Label();
            this.lNrPytaniaPodst = new System.Windows.Forms.Label();
            this.lCzasOdp = new System.Windows.Forms.Label();
            this.prgB = new System.Windows.Forms.ProgressBar();
            this.lNrPyt = new System.Windows.Forms.Label();
            this.btnNastepne = new System.Windows.Forms.Button();
            this.btnZakoncz = new System.Windows.Forms.Button();
            this.panel3 = new System.Windows.Forms.Panel();
            this.lPunkty = new System.Windows.Forms.Label();
            this.lWartoscPkt = new System.Windows.Forms.Label();
            this.panel4 = new System.Windows.Forms.Panel();
            this.polecenieLabel = new System.Windows.Forms.RichTextBox();
            this.lP = new System.Windows.Forms.Label();
            this.pcB = new System.Windows.Forms.PictureBox();
            this.panelOdp1 = new System.Windows.Forms.Panel();
            this.btnNie = new System.Windows.Forms.Button();
            this.btnTak = new System.Windows.Forms.Button();
            this.pOdp1 = new System.Windows.Forms.Panel();
            this.labelC = new System.Windows.Forms.Label();
            this.labelB = new System.Windows.Forms.Label();
            this.labelA = new System.Windows.Forms.Label();
            this.lO3 = new System.Windows.Forms.Label();
            this.lO2 = new System.Windows.Forms.Label();
            this.lO1 = new System.Windows.Forms.Label();
            this.btnC = new System.Windows.Forms.Button();
            this.btnA = new System.Windows.Forms.Button();
            this.btnB = new System.Windows.Forms.Button();
            this.panel1.SuspendLayout();
            this.panel3.SuspendLayout();
            this.panel4.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.pcB)).BeginInit();
            this.panelOdp1.SuspendLayout();
            this.pOdp1.SuspendLayout();
            this.SuspendLayout();
            // 
            // panel1
            // 
            this.panel1.BackColor = System.Drawing.Color.Snow;
            this.panel1.Controls.Add(this.mtxtT);
            this.panel1.Controls.Add(this.lSpec);
            this.panel1.Controls.Add(this.lPodst);
            this.panel1.Controls.Add(this.lNrPytaniaSpec);
            this.panel1.Controls.Add(this.lNrPytaniaPodst);
            this.panel1.Controls.Add(this.lCzasOdp);
            this.panel1.Controls.Add(this.prgB);
            this.panel1.Controls.Add(this.lNrPyt);
            this.panel1.Controls.Add(this.btnNastepne);
            this.panel1.Controls.Add(this.btnZakoncz);
            this.panel1.Dock = System.Windows.Forms.DockStyle.Right;
            this.panel1.Location = new System.Drawing.Point(887, 0);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(297, 761);
            this.panel1.TabIndex = 0;
            // 
            // mtxtT
            // 
            this.mtxtT.BackColor = System.Drawing.SystemColors.Highlight;
            this.mtxtT.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.mtxtT.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.mtxtT.ForeColor = System.Drawing.Color.White;
            this.mtxtT.Location = new System.Drawing.Point(51, 359);
            this.mtxtT.Mask = "00:00:00";
            this.mtxtT.Name = "mtxtT";
            this.mtxtT.Size = new System.Drawing.Size(190, 28);
            this.mtxtT.TabIndex = 11;
            this.mtxtT.Text = "000025";
            this.mtxtT.TextAlign = System.Windows.Forms.HorizontalAlignment.Center;
            this.mtxtT.ValidatingType = typeof(System.DateTime);
            // 
            // lSpec
            // 
            this.lSpec.AutoSize = true;
            this.lSpec.Font = new System.Drawing.Font("Microsoft Sans Serif", 9F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.lSpec.Location = new System.Drawing.Point(174, 230);
            this.lSpec.Name = "lSpec";
            this.lSpec.Size = new System.Drawing.Size(106, 15);
            this.lSpec.TabIndex = 10;
            this.lSpec.Text = "Specjalistyczne";
            this.lSpec.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // lPodst
            // 
            this.lPodst.AutoSize = true;
            this.lPodst.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.lPodst.Location = new System.Drawing.Point(60, 230);
            this.lPodst.Name = "lPodst";
            this.lPodst.Size = new System.Drawing.Size(94, 16);
            this.lPodst.TabIndex = 9;
            this.lPodst.Text = "Podstawowe";
            this.lPodst.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // lNrPytaniaSpec
            // 
            this.lNrPytaniaSpec.BackColor = System.Drawing.SystemColors.Highlight;
            this.lNrPytaniaSpec.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.lNrPytaniaSpec.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.lNrPytaniaSpec.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.lNrPytaniaSpec.ForeColor = System.Drawing.Color.White;
            this.lNrPytaniaSpec.Location = new System.Drawing.Point(177, 185);
            this.lNrPytaniaSpec.Name = "lNrPytaniaSpec";
            this.lNrPytaniaSpec.Size = new System.Drawing.Size(76, 45);
            this.lNrPytaniaSpec.TabIndex = 8;
            this.lNrPytaniaSpec.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // lNrPytaniaPodst
            // 
            this.lNrPytaniaPodst.BackColor = System.Drawing.SystemColors.Highlight;
            this.lNrPytaniaPodst.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.lNrPytaniaPodst.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.lNrPytaniaPodst.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.lNrPytaniaPodst.ForeColor = System.Drawing.Color.White;
            this.lNrPytaniaPodst.Location = new System.Drawing.Point(64, 185);
            this.lNrPytaniaPodst.Name = "lNrPytaniaPodst";
            this.lNrPytaniaPodst.Size = new System.Drawing.Size(76, 45);
            this.lNrPytaniaPodst.TabIndex = 7;
            this.lNrPytaniaPodst.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // lCzasOdp
            // 
            this.lCzasOdp.AutoSize = true;
            this.lCzasOdp.BackColor = System.Drawing.Color.Snow;
            this.lCzasOdp.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.lCzasOdp.Location = new System.Drawing.Point(13, 227);
            this.lCzasOdp.Name = "lCzasOdp";
            this.lCzasOdp.Size = new System.Drawing.Size(252, 100);
            this.lCzasOdp.TabIndex = 5;
            this.lCzasOdp.Text = "            \r\n           \r\n           Czas na\r\n udzielenie odpowiedzi";
            // 
            // prgB
            // 
            this.prgB.Location = new System.Drawing.Point(18, 330);
            this.prgB.Maximum = 25;
            this.prgB.Name = "prgB";
            this.prgB.Size = new System.Drawing.Size(250, 23);
            this.prgB.TabIndex = 4;
            // 
            // lNrPyt
            // 
            this.lNrPyt.AutoSize = true;
            this.lNrPyt.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.lNrPyt.Location = new System.Drawing.Point(68, 148);
            this.lNrPyt.Name = "lNrPyt";
            this.lNrPyt.Size = new System.Drawing.Size(164, 25);
            this.lNrPyt.TabIndex = 3;
            this.lNrPyt.Text = "Numer pytania";
            // 
            // btnNastepne
            // 
            this.btnNastepne.BackColor = System.Drawing.SystemColors.Highlight;
            this.btnNastepne.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnNastepne.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.btnNastepne.ForeColor = System.Drawing.SystemColors.ButtonHighlight;
            this.btnNastepne.Location = new System.Drawing.Point(31, 457);
            this.btnNastepne.Name = "btnNastepne";
            this.btnNastepne.Size = new System.Drawing.Size(225, 69);
            this.btnNastepne.TabIndex = 1;
            this.btnNastepne.Text = "NASTĘPNE PYTANIE";
            this.btnNastepne.UseVisualStyleBackColor = false;
            this.btnNastepne.Click += new System.EventHandler(this.btnNext_Click);
            // 
            // btnZakoncz
            // 
            this.btnZakoncz.BackColor = System.Drawing.Color.Tomato;
            this.btnZakoncz.Cursor = System.Windows.Forms.Cursors.Hand;
            this.btnZakoncz.Dock = System.Windows.Forms.DockStyle.Top;
            this.btnZakoncz.FlatAppearance.BorderColor = System.Drawing.Color.White;
            this.btnZakoncz.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnZakoncz.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.btnZakoncz.ForeColor = System.Drawing.SystemColors.HighlightText;
            this.btnZakoncz.Image = global::Prawo_jazdy.Properties.Resources.x;
            this.btnZakoncz.Location = new System.Drawing.Point(0, 0);
            this.btnZakoncz.Name = "btnZakoncz";
            this.btnZakoncz.Size = new System.Drawing.Size(297, 100);
            this.btnZakoncz.TabIndex = 0;
            this.btnZakoncz.Text = "ZAKOŃCZ EGZAMIN";
            this.btnZakoncz.TextImageRelation = System.Windows.Forms.TextImageRelation.TextBeforeImage;
            this.btnZakoncz.UseVisualStyleBackColor = false;
            this.btnZakoncz.Click += new System.EventHandler(this.btnEnd_Click);
            // 
            // panel3
            // 
            this.panel3.BackColor = System.Drawing.Color.Snow;
            this.panel3.CausesValidation = false;
            this.panel3.Controls.Add(this.lPunkty);
            this.panel3.Controls.Add(this.lWartoscPkt);
            this.panel3.Dock = System.Windows.Forms.DockStyle.Top;
            this.panel3.Location = new System.Drawing.Point(0, 0);
            this.panel3.Name = "panel3";
            this.panel3.Size = new System.Drawing.Size(887, 100);
            this.panel3.TabIndex = 1;
            // 
            // lPunkty
            // 
            this.lPunkty.BackColor = System.Drawing.SystemColors.Highlight;
            this.lPunkty.BorderStyle = System.Windows.Forms.BorderStyle.Fixed3D;
            this.lPunkty.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.lPunkty.Font = new System.Drawing.Font("Microsoft Sans Serif", 24F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.lPunkty.ForeColor = System.Drawing.Color.White;
            this.lPunkty.Location = new System.Drawing.Point(286, 19);
            this.lPunkty.Name = "lPunkty";
            this.lPunkty.Size = new System.Drawing.Size(100, 63);
            this.lPunkty.TabIndex = 6;
            this.lPunkty.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // lWartoscPkt
            // 
            this.lWartoscPkt.AutoSize = true;
            this.lWartoscPkt.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.lWartoscPkt.Location = new System.Drawing.Point(37, 42);
            this.lWartoscPkt.Name = "lWartoscPkt";
            this.lWartoscPkt.Size = new System.Drawing.Size(200, 20);
            this.lWartoscPkt.TabIndex = 4;
            this.lWartoscPkt.Text = "WARTOŚĆ PUNKTOWA";
            // 
            // panel4
            // 
            this.panel4.BackColor = System.Drawing.Color.Snow;
            this.panel4.Controls.Add(this.polecenieLabel);
            this.panel4.Controls.Add(this.lP);
            this.panel4.Controls.Add(this.pcB);
            this.panel4.Dock = System.Windows.Forms.DockStyle.Fill;
            this.panel4.Location = new System.Drawing.Point(0, 100);
            this.panel4.Name = "panel4";
            this.panel4.Size = new System.Drawing.Size(887, 661);
            this.panel4.TabIndex = 2;
            // 
            // polecenieLabel
            // 
            this.polecenieLabel.BackColor = System.Drawing.Color.Snow;
            this.polecenieLabel.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.polecenieLabel.DetectUrls = false;
            this.polecenieLabel.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.polecenieLabel.Location = new System.Drawing.Point(62, 342);
            this.polecenieLabel.Name = "polecenieLabel";
            this.polecenieLabel.ReadOnly = true;
            this.polecenieLabel.RightToLeft = System.Windows.Forms.RightToLeft.No;
            this.polecenieLabel.ScrollBars = System.Windows.Forms.RichTextBoxScrollBars.None;
            this.polecenieLabel.Size = new System.Drawing.Size(740, 96);
            this.polecenieLabel.TabIndex = 4;
            this.polecenieLabel.Text = "";
            // 
            // lP
            // 
            this.lP.BackColor = System.Drawing.Color.Snow;
            this.lP.Font = new System.Drawing.Font("Microsoft Sans Serif", 20.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.lP.Location = new System.Drawing.Point(3, 340);
            this.lP.Name = "lP";
            this.lP.Size = new System.Drawing.Size(881, 98);
            this.lP.TabIndex = 1;
            this.lP.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // pcB
            // 
            this.pcB.BackColor = System.Drawing.Color.Snow;
            this.pcB.Location = new System.Drawing.Point(3, 3);
            this.pcB.Name = "pcB";
            this.pcB.Size = new System.Drawing.Size(878, 334);
            this.pcB.TabIndex = 0;
            this.pcB.TabStop = false;
            // 
            // panelOdp1
            // 
            this.panelOdp1.AutoSize = true;
            this.panelOdp1.BackColor = System.Drawing.Color.Snow;
            this.panelOdp1.Controls.Add(this.btnNie);
            this.panelOdp1.Controls.Add(this.btnTak);
            this.panelOdp1.Location = new System.Drawing.Point(0, 0);
            this.panelOdp1.Name = "panelOdp1";
            this.panelOdp1.Size = new System.Drawing.Size(887, 220);
            this.panelOdp1.TabIndex = 11;
            // 
            // btnNie
            // 
            this.btnNie.BackColor = System.Drawing.SystemColors.Highlight;
            this.btnNie.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnNie.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.btnNie.ForeColor = System.Drawing.SystemColors.ButtonHighlight;
            this.btnNie.Location = new System.Drawing.Point(533, 69);
            this.btnNie.Name = "btnNie";
            this.btnNie.Size = new System.Drawing.Size(182, 72);
            this.btnNie.TabIndex = 1;
            this.btnNie.Text = "NIE";
            this.btnNie.UseVisualStyleBackColor = false;
            this.btnNie.Click += new System.EventHandler(this.btnNie_Click);
            // 
            // btnTak
            // 
            this.btnTak.BackColor = System.Drawing.SystemColors.Highlight;
            this.btnTak.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnTak.Font = new System.Drawing.Font("Microsoft Sans Serif", 18F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.btnTak.ForeColor = System.Drawing.SystemColors.ButtonHighlight;
            this.btnTak.Location = new System.Drawing.Point(97, 75);
            this.btnTak.Name = "btnTak";
            this.btnTak.Size = new System.Drawing.Size(182, 72);
            this.btnTak.TabIndex = 0;
            this.btnTak.Text = "TAK";
            this.btnTak.UseVisualStyleBackColor = false;
            this.btnTak.Click += new System.EventHandler(this.btnTak_Click);
            // 
            // pOdp1
            // 
            this.pOdp1.BackColor = System.Drawing.Color.Snow;
            this.pOdp1.Controls.Add(this.panelOdp1);
            this.pOdp1.Controls.Add(this.labelC);
            this.pOdp1.Controls.Add(this.labelB);
            this.pOdp1.Controls.Add(this.labelA);
            this.pOdp1.Controls.Add(this.lO3);
            this.pOdp1.Controls.Add(this.lO2);
            this.pOdp1.Controls.Add(this.lO1);
            this.pOdp1.Controls.Add(this.btnC);
            this.pOdp1.Controls.Add(this.btnA);
            this.pOdp1.Controls.Add(this.btnB);
            this.pOdp1.Dock = System.Windows.Forms.DockStyle.Bottom;
            this.pOdp1.Location = new System.Drawing.Point(0, 541);
            this.pOdp1.Name = "pOdp1";
            this.pOdp1.Size = new System.Drawing.Size(887, 220);
            this.pOdp1.TabIndex = 3;
            // 
            // labelC
            // 
            this.labelC.AutoSize = true;
            this.labelC.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.labelC.Location = new System.Drawing.Point(86, 169);
            this.labelC.Name = "labelC";
            this.labelC.Size = new System.Drawing.Size(60, 24);
            this.labelC.TabIndex = 13;
            this.labelC.Text = "label4";
            // 
            // labelB
            // 
            this.labelB.AutoSize = true;
            this.labelB.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.labelB.Location = new System.Drawing.Point(86, 97);
            this.labelB.Name = "labelB";
            this.labelB.Size = new System.Drawing.Size(60, 24);
            this.labelB.TabIndex = 12;
            this.labelB.Text = "label2";
            // 
            // labelA
            // 
            this.labelA.AutoSize = true;
            this.labelA.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.labelA.Location = new System.Drawing.Point(86, 27);
            this.labelA.Name = "labelA";
            this.labelA.Size = new System.Drawing.Size(60, 24);
            this.labelA.TabIndex = 11;
            this.labelA.Text = "label1";
            // 
            // lO3
            // 
            this.lO3.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.lO3.Location = new System.Drawing.Point(68, 158);
            this.lO3.Name = "lO3";
            this.lO3.Size = new System.Drawing.Size(778, 50);
            this.lO3.TabIndex = 10;
            // 
            // lO2
            // 
            this.lO2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.lO2.Location = new System.Drawing.Point(72, 86);
            this.lO2.Name = "lO2";
            this.lO2.Size = new System.Drawing.Size(774, 50);
            this.lO2.TabIndex = 9;
            // 
            // lO1
            // 
            this.lO1.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.lO1.Location = new System.Drawing.Point(69, 16);
            this.lO1.Name = "lO1";
            this.lO1.Size = new System.Drawing.Size(777, 50);
            this.lO1.TabIndex = 8;
            // 
            // btnC
            // 
            this.btnC.BackColor = System.Drawing.SystemColors.Highlight;
            this.btnC.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnC.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.btnC.ForeColor = System.Drawing.SystemColors.ButtonHighlight;
            this.btnC.Location = new System.Drawing.Point(12, 158);
            this.btnC.Name = "btnC";
            this.btnC.Size = new System.Drawing.Size(50, 50);
            this.btnC.TabIndex = 7;
            this.btnC.Text = "C";
            this.btnC.UseVisualStyleBackColor = false;
            this.btnC.Click += new System.EventHandler(this.btnC_Click);
            // 
            // btnA
            // 
            this.btnA.BackColor = System.Drawing.SystemColors.Highlight;
            this.btnA.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnA.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.btnA.ForeColor = System.Drawing.SystemColors.ButtonHighlight;
            this.btnA.Location = new System.Drawing.Point(12, 16);
            this.btnA.Name = "btnA";
            this.btnA.Size = new System.Drawing.Size(50, 50);
            this.btnA.TabIndex = 0;
            this.btnA.Text = "A";
            this.btnA.UseVisualStyleBackColor = false;
            this.btnA.Click += new System.EventHandler(this.btnA_Click);
            // 
            // btnB
            // 
            this.btnB.BackColor = System.Drawing.SystemColors.Highlight;
            this.btnB.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.btnB.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(238)));
            this.btnB.ForeColor = System.Drawing.SystemColors.ButtonHighlight;
            this.btnB.Location = new System.Drawing.Point(12, 86);
            this.btnB.Name = "btnB";
            this.btnB.Size = new System.Drawing.Size(50, 50);
            this.btnB.TabIndex = 6;
            this.btnB.Text = "B";
            this.btnB.UseVisualStyleBackColor = false;
            this.btnB.Click += new System.EventHandler(this.btnB_Click);
            // 
            // Prawo_Jazdy
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.LightBlue;
            this.ClientSize = new System.Drawing.Size(1184, 761);
            this.Controls.Add(this.pOdp1);
            this.Controls.Add(this.panel4);
            this.Controls.Add(this.panel3);
            this.Controls.Add(this.panel1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.SizableToolWindow;
            this.Name = "Prawo_Jazdy";
            this.Text = "EGZAMIN PRAWO JAZDY";
            this.Load += new System.EventHandler(this.Prawo_Jazdy_Load);
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.panel3.ResumeLayout(false);
            this.panel3.PerformLayout();
            this.panel4.ResumeLayout(false);
            ((System.ComponentModel.ISupportInitialize)(this.pcB)).EndInit();
            this.panelOdp1.ResumeLayout(false);
            this.pOdp1.ResumeLayout(false);
            this.pOdp1.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Button btnNastepne;
        private System.Windows.Forms.Button btnZakoncz;
        private System.Windows.Forms.Panel panel3;
        private System.Windows.Forms.Panel panel4;
        private System.Windows.Forms.Panel pOdp1;
        private System.Windows.Forms.Button btnA;
        private System.Windows.Forms.ProgressBar prgB;
        private System.Windows.Forms.Label lNrPyt;
        private System.Windows.Forms.PictureBox pcB;
        private System.Windows.Forms.Label lCzasOdp;
        private System.Windows.Forms.Label lPunkty;
        private System.Windows.Forms.Label lWartoscPkt;
        private System.Windows.Forms.Button btnC;
        private System.Windows.Forms.Button btnB;
        private System.Windows.Forms.Label lO3;
        private System.Windows.Forms.Label lO2;
        private System.Windows.Forms.Label lO1;
        private System.Windows.Forms.Label lP;
        private System.Windows.Forms.Panel panelOdp1;
        private System.Windows.Forms.Button btnNie;
        private System.Windows.Forms.Button btnTak;
        private System.Windows.Forms.Label labelC;
        private System.Windows.Forms.Label labelB;
        private System.Windows.Forms.Label labelA;
        private System.Windows.Forms.Label lSpec;
        private System.Windows.Forms.Label lPodst;
        private System.Windows.Forms.Label lNrPytaniaSpec;
        private System.Windows.Forms.Label lNrPytaniaPodst;
        private System.Windows.Forms.MaskedTextBox mtxtT;
        private System.Windows.Forms.RichTextBox polecenieLabel;
    }
}

