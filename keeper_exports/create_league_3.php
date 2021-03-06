<div class='w3-container w3-card-24 w3-margin' id='league_creator'>
            <div class='w3-container w3-blue'>
                <h2>Create a League</h2>
            </div>
            <form class='w3-container w3-text-blue w3-light-grey' method='post' action='create_league.php'>
                <div class='w3-row w3-section w3-half'>                
                    <!-- League Name -->
                    <label class='w3-label w3-text-blue'>League Name</label>
                    <input class='w3-input w3-validate w3-border' type='text'>
                </div>
                <div class='w3-row w3-section'>
                    <!-- Number of Teams -->
                    <select class='w3-select w3-border w3-text-blue' name='num_of_teams'>
                        <option value='' disabled selected>How many teams?</option>
                        <option value='4'>4</option>
                        <option value='4'>5</option>
                        <option value='6'>6</option>
                        <option value='6'>7</option>
                        <option value='8'>8</option>
                        <option value='8'>9</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                        <option value='12'>13</option>
                        <option value='14'>14</option>
                        <option value='14'>15</option>
                        <option value='16'>16</option>
                        <option value='16'>17</option>
                        <option value='18'>18</option>
                        <option value='18'>19</option>
                        <option value='20'>20</option>
                    </select>
                </div>
                <div class='w3-row w3-section'>
                    <!-- Playoffs -->
                    <select class='w3-select w3-border w3-text-blue' name='num_of_playoff_teams'>
                        <option value='' disabled selected>How many playoff teams?</option>
                        <option value='4'>4</option>
                        <option value='6'>6</option>
                        <option value='8'>8</option>
                        <option value='10'>10</option>
                        <option value='12'>12</option>
                    </select>
                </div>
                <div class='w3-row w3-section'>
                    <select class='w3-select w3-border w3-text-blue' name='playoff_start'>
                        <option value='' disabled selected>Pick the first week of the playoffs</option>
                        <option value='13'>Week 13 (for 10 or more team playoffs)</option>
                        <option value='14'>Week 14 (for 6 or more team playoffs)</option>
                        <option value='15'>Week 15 (for 4 or 6 team playoffs)</option>
                        <option value='16'>Week 16 (for 4 team playoffs)</option>
                    </select>
                    <br>
                </div>
                <div class='w3-row w3-section'>
                    <!-- League Type -->
                    <select class='w3-select w3-border w3-text-blue' name='league_type'>
                        <option value='' disabled selected>Choose league type</option>
                        <option value='standard'>Standard league</option>
                        <option value='next_level'>Next Level league</option>
                        <option value='next_level_w_boosts'>Next Level league with Boosts</option>
                    </select>
                </div>
                <div class='w3-row w3-section'>
                    <!-- Buffs On/Off -->
                    <input class='w3-radio' type='radio' name='buffs' value='on' checked>
                    <label class='w3-validate'>Buffs On</label>
                    <input class='w3-radio' type='radio' name='buffs' value='off' checked>
                    <label class='w3-validate'>Buffs Off</label>
                </div>
                <div class='w3-row w3-section'>
                    <div class='w3-col m2'>
                        <!-- Position Counts -->
                        <label>Quarterback (QB)</label>
                        <select class='w3-select w3-border w3-text-blue' name='num_of_QB'>
                            <option value='1' selected>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                            <option value='9'>9</option>
                            <option value='10'>10</option>
                        </select>
                    </div>
                    <div class='w3-col m2'>
                        <label>Runningback (RB)</label>
                        <select class='w3-select w3-border w3-text-blue' name='num_of_RB'>
                            <option value='1'>1</option>
                            <option value='2' selected>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                            <option value='9'>9</option>
                            <option value='10'>10</option>
                        </select>
                    </div>
                    <div class='w3-col m2'>
                        <label>Wide Receiver(WR)</label>
                        <select class='w3-select w3-border w3-text-blue' name='num_of_WR'>
                            <option value='1'>1</option>
                            <option value='2' selected>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                            <option value='9'>9</option>
                            <option value='10'>10</option>
                        </select>
                    </div>
                </div>
                <div class='w3-row w3-section'>
                    <div class='w3-col m2'>
                        <label>Tight End (TE)</label>
                        <select class='w3-select w3-border w3-text-blue' name='num_of_TE'>
                            <option value='1' selected>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                            <option value='9'>9</option>
                            <option value='10'>10</option>
                        </select>
                    </div>
                    <div class='w3-col m2'>
                        <label>Kicker (K)</label>
                        <select class='w3-select w3-border w3-text-blue' name='num_of_K'>
                            <option value='1' selected>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                            <option value='9'>9</option>
                            <option value='10'>10</option>
                        </select>
                    </div>
                    <div class='w3-col m2'>
                        <label>Defense (DEF)</label>
                        <select class='w3-select w3-border w3-text-blue' name='num_of_DEF'>
                            <option value='1' selected>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                            <option value='9'>9</option>
                            <option value='10'>10</option>
                        </select>
                    </div>
                </div>
                <div class='w3-row w3-section'>
                    <div class='w3-col m4'>
                        <label>Flex type</label>
                        <select class='w3-select w3-border w3-text-blue' name='flex_type'>
                            <option value='w_r' selected>Wide Receiver / Running Back (W/R)</option>
                            <option value='w_t'>Wide Receiver / Tight End (W/T)</option>
                            <option value='q_r_w_t'>Quarterback / Running Back / Wide Receiver / Tight End (Q/R/W/T)</option>
                            <option value='r_w_t'>Running Back / Wide Receiver / Tight End (R/W/T)</option>
                        </select>
                    </div>
                    <div class='w3-col m2'>
                        <label>Flex</label>
                        <select class='w3-select w3-border w3-text-blue' name='num_of_flex'>
                            <option value='1' selected>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                            <option value='9'>9</option>
                            <option value='10'>10</option>
                        </select>
                    </div>
                </div>
                <div class='w3-row w3-section'>
                    <div class='w3-col m2'>
                        <label>Bench (BN)</label>
                        <select class='w3-select w3-border w3-text-blue' name='num_of_BN'>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6' selected>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                            <option value='9'>9</option>
                            <option value='10'>10</option>
                        </select>
                    </div>
                </div>
                <div class='w3-row w3-section'>
                    <button class='w3-btn w3-blue w3-hover-green w3-round'>Submit</button>
                </div>
            </form>
        </div>