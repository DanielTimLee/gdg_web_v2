<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 16. 2. 12
 * Time: 오후 5:10
 */
?>
<form class="ui form segment" action="method.php" method="post">
    <input type="hidden" name="action" value="register">
    <div class="field">
        <label>Full Name</label>
        <input type="text" name="name" placeholder="Full Name">
    </div>
    <div class="field">
        <label>Username</label>
        <input type="text" name="usrname" placeholder="Username">
    </div>
    <div class="field">
        <label>Password</label>
        <input type="password" name="pwd" placeholder="Password">
    </div>
    <div class="field">
        <label>Confirm Password</label>
        <input type="password" name="cpwd" placeholder="Confirm Password">
    </div>
    <div class="field">
        <label>E-mail</label>
        <input type="email" name="email" placeholder="JohnAppleseed@apple.com">
    </div>
    <div class="field">
        <label>Describe Yourself !!</label>
        <textarea rows="3" name="memo"></textarea>
    </div>
    <div class="ui blue submit button">Submit</div>
    <div class="ui error message">
    </div>
</form>
<script>
    var contact_rules = {
        Fullname: {
            identifier: 'name',
            rules: [{
                type: 'empty',
                prompt: 'Please enter name'
            }]
        },
        Username: {
            identifier: 'usrname',
            rules: [{
                type: 'empty',
                prompt: 'Please enter Username'
            }]
        },
        Password: {
            identifier: 'pwd',
            rules: [{
                type: 'empty',
                prompt: 'Please enter a password'
            },
                {
                    type: 'minLength[6]',
                    prompt: 'Your password must be at least {ruleValue} characters'
                }]
        },
        Confirm_Password: {
            indentifier: 'cpwd',
            rules: [{
                type: 'match[pwd]',
                prompt: 'Please put the same value in both fields'
            }]
        },
        email: {
            identifier: 'email',
            rules: [{
                type: 'email',
                prompt: 'Please enter a valid e-mail'
            }]
        },
        memo: {
            identifier: 'memo',
            rules: [{
                type: 'empty',
                prompt: 'Please enter your description'
            }]
        }
    };
    $(".ui.form").form(contact_rules, {
        fields: contact_rules,
        inline: true,
        on: blur
    });
</script>
