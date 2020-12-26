<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* account/reset_password.html.twig */
class __TwigTemplate_92c5b830aea8c33426b9b988b9f75ba98dde589a6455cb879000a229f5053eee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/reset_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/reset_password.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset password"), "html", null, true);
        echo "</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>

    <!-- Fonts and icons -->
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/webfont/webfont.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        WebFont.load({
            google: {\"families\":[\"Montserrat:100,200,300,400,500,600,700,800,900\"]},
            custom: {\"families\":[\"Flaticon\", \"LineAwesome\"], urls: ['";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fonts.css"), "html", null, true);
        echo "']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/ready.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo.css"), "html", null, true);
        echo "\">
</head>
<body class=\"login\">
<div class=\"wrapper wrapper-login\">
    ";
        // line 27
        $this->loadTemplate("partial/alert.html.twig", "account/reset_password.html.twig", 27)->display($context);
        // line 28
        echo "    <div class=\"container container-login animated fadeIn\">
        <h3 class=\"text-center\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New password"), "html", null, true);
        echo "</h3>

        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group password_groupe\">
                <label for=\"password\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New password"), "html", null, true);
        echo " <span class=\"required-label\">*</span></label>
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "password", [], "any", false, false, false, 34), "first", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <span class=\"toggle-password-icon\"> <button id=\"toggle-password\" class=\"toggle-password\">
                    <svg width=\"25\" height=\"19\" viewBox=\"0 0 25 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M15.4478 6.4277C15.3482 6.3412 15.2196 6.29568 15.0878 6.3003C14.956 6.30492 14.8309 6.35932 14.7376 6.45257C14.6444 6.54581 14.59 6.67095 14.5853 6.80274C14.5807 6.93453 14.6263 7.06316 14.7128 7.1627C15.0306 7.44572 15.2874 7.7907 15.4672 8.17647C15.647 8.56225 15.7461 8.98071 15.7584 9.40615C15.7707 9.83159 15.696 10.2551 15.5389 10.6506C15.3817 11.0462 15.1454 11.4054 14.8444 11.7064C14.5435 12.0073 14.1842 12.2436 13.7886 12.4008C13.3931 12.558 12.9696 12.6327 12.5442 12.6204C12.1187 12.608 11.7003 12.5089 11.3145 12.3291C10.9288 12.1493 10.5838 11.8926 10.3007 11.5747C10.2539 11.5207 10.1964 11.477 10.1318 11.4462C10.0673 11.4154 9.99715 11.3982 9.9257 11.3957C9.85426 11.3932 9.78307 11.4055 9.71655 11.4317C9.65004 11.4579 9.58963 11.4975 9.53908 11.548C9.48853 11.5986 9.44891 11.659 9.42271 11.7255C9.39652 11.792 9.38429 11.8632 9.38679 11.9347C9.3893 12.0061 9.40647 12.0763 9.43725 12.1408C9.46804 12.2053 9.51179 12.2628 9.56575 12.3097C10.3471 13.091 11.4068 13.53 12.5117 13.53C13.6167 13.53 14.6764 13.091 15.4577 12.3097C16.2391 11.5284 16.678 10.4687 16.678 9.3637C16.678 8.25874 16.2391 7.19903 15.4577 6.4177L15.4478 6.4277Z\" fill=\"#686868\"/>
                    <path d=\"M13.2318 5.27771C12.6322 5.16406 12.0149 5.18486 11.4243 5.33862C10.8337 5.49238 10.2846 5.77527 9.81657 6.16688C9.34852 6.5585 8.9732 7.04909 8.71766 7.60328C8.46212 8.15748 8.33274 8.76146 8.33883 9.3717C8.34178 9.61543 8.36653 9.85839 8.41282 10.0977C8.43414 10.2181 8.49708 10.3273 8.59066 10.406C8.68424 10.4848 8.80251 10.5282 8.92483 10.5287C8.95538 10.5287 8.98587 10.5257 9.01583 10.5197C9.15094 10.4953 9.27099 10.4186 9.34998 10.3063C9.42897 10.194 9.46053 10.0551 9.43783 9.91971C9.40276 9.74044 9.38401 9.55835 9.38183 9.3757C9.37625 8.91718 9.47286 8.46319 9.66463 8.04667C9.85641 7.63015 10.1385 7.26157 10.4905 6.96769C10.8425 6.67382 11.2556 6.46202 11.6997 6.34768C12.1437 6.23335 12.6077 6.21935 13.0578 6.3067C13.1269 6.32229 13.1984 6.32371 13.268 6.31085C13.3376 6.29799 13.4039 6.27114 13.4628 6.23192C13.5218 6.19269 13.5721 6.1419 13.6108 6.08264C13.6496 6.02338 13.6758 5.95688 13.6881 5.88716C13.7004 5.81744 13.6984 5.74595 13.6822 5.67703C13.666 5.60811 13.636 5.54319 13.594 5.4862C13.552 5.42922 13.4988 5.38136 13.4378 5.34552C13.3767 5.30968 13.3091 5.28661 13.2388 5.27771H13.2318Z\" fill=\"#686868\"/>
                    <path d=\"M24.8768 9.03571C22.9352 6.84053 20.6269 4.99946 18.0548 3.5947C17.932 3.53131 17.7891 3.5193 17.6574 3.56131C17.5258 3.60332 17.4162 3.6959 17.3528 3.8187C17.2894 3.94149 17.2774 4.08445 17.3194 4.2161C17.3614 4.34775 17.454 4.45732 17.5768 4.52071C19.8918 5.79322 21.9856 7.43208 23.7768 9.3737C22.5358 10.7177 17.6488 15.6237 12.4978 15.6237C10.6796 15.6069 8.88891 15.1774 7.26083 14.3677C7.13808 14.318 7.00099 14.3169 6.87745 14.3646C6.75391 14.4123 6.65318 14.5053 6.59574 14.6246C6.5383 14.744 6.52846 14.8807 6.56823 15.007C6.608 15.1333 6.69438 15.2398 6.80982 15.3047C8.57891 16.1833 10.5246 16.648 12.4998 16.6637C18.9178 16.6637 24.6368 9.9927 24.8758 9.7077C24.9553 9.61383 24.999 9.49487 24.9991 9.37189C24.9993 9.2489 24.956 9.12982 24.8768 9.03571Z\" fill=\"#686868\"/>
                    <path d=\"M15.9167 2.6807C14.8174 2.297 13.663 2.09435 12.4987 2.0807C6.08072 2.0807 0.361723 8.7517 0.122723 9.0367C0.0487375 9.12443 0.00578831 9.23414 0.00054443 9.34878C-0.00469945 9.46342 0.0280554 9.57658 0.0937228 9.6707C1.41521 11.4422 3.0306 12.9741 4.86972 14.1997C4.92672 14.2374 4.99058 14.2635 5.05765 14.2765C5.12473 14.2895 5.19372 14.2892 5.26067 14.2755C5.32762 14.2619 5.39123 14.2352 5.44786 14.1969C5.50449 14.1587 5.55303 14.1097 5.59072 14.0527C5.62841 13.9957 5.65451 13.9318 5.66752 13.8648C5.68053 13.7977 5.6802 13.7287 5.66655 13.6618C5.6529 13.5948 5.62619 13.5312 5.58796 13.4746C5.54973 13.4179 5.50072 13.3694 5.44372 13.3317C3.8339 12.2455 2.39965 10.9195 1.19072 9.3997C2.39072 8.0997 7.30872 3.1217 12.4967 3.1217C13.5487 3.13523 14.5915 3.31894 15.5847 3.6657C15.6493 3.68853 15.7179 3.69817 15.7863 3.69406C15.8547 3.68996 15.9216 3.67219 15.983 3.6418C16.0445 3.61141 16.0992 3.56902 16.144 3.51714C16.1887 3.46525 16.2227 3.40491 16.2437 3.3397C16.2876 3.20907 16.2779 3.06639 16.2168 2.94289C16.1557 2.81938 16.0482 2.72511 15.9177 2.6807H15.9167Z\" fill=\"#686868\"/>
                    <path d=\"M21.7197 0.151703C21.622 0.0545474 21.4899 0 21.3522 0C21.2144 0 21.0823 0.0545474 20.9847 0.151703L3.27567 17.8587C3.18918 17.9582 3.14365 18.0869 3.14827 18.2187C3.15288 18.3504 3.2073 18.4756 3.30054 18.5688C3.39379 18.6621 3.51892 18.7165 3.65071 18.7211C3.7825 18.7257 3.91113 18.6802 4.01067 18.5937L21.7197 0.890701C21.8168 0.793069 21.8714 0.660937 21.8714 0.523201C21.8714 0.385465 21.8168 0.253333 21.7197 0.155701V0.151703Z\" fill=\"#686868\"/>
                    </svg>
                    </button> </span>
            </div> 
            <div class=\"form-group\">
                <label class=\"text-danger\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "password", [], "any", false, false, false, 46), "first", [], "any", false, false, false, 46), 'errors');
        echo "</label>
            </div>
            <div class=\"form-group password_groupe\">
                <label for=\"password\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Repeat password"), "html", null, true);
        echo " <span class=\"required-label\">*</span></label>
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "password", [], "any", false, false, false, 50), "second", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <span class=\"toggle-password-icon\"> <button id=\"toggle-password-second\" class=\"toggle-password\">
                    <svg width=\"25\" height=\"19\" viewBox=\"0 0 25 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M15.4478 6.4277C15.3482 6.3412 15.2196 6.29568 15.0878 6.3003C14.956 6.30492 14.8309 6.35932 14.7376 6.45257C14.6444 6.54581 14.59 6.67095 14.5853 6.80274C14.5807 6.93453 14.6263 7.06316 14.7128 7.1627C15.0306 7.44572 15.2874 7.7907 15.4672 8.17647C15.647 8.56225 15.7461 8.98071 15.7584 9.40615C15.7707 9.83159 15.696 10.2551 15.5389 10.6506C15.3817 11.0462 15.1454 11.4054 14.8444 11.7064C14.5435 12.0073 14.1842 12.2436 13.7886 12.4008C13.3931 12.558 12.9696 12.6327 12.5442 12.6204C12.1187 12.608 11.7003 12.5089 11.3145 12.3291C10.9288 12.1493 10.5838 11.8926 10.3007 11.5747C10.2539 11.5207 10.1964 11.477 10.1318 11.4462C10.0673 11.4154 9.99715 11.3982 9.9257 11.3957C9.85426 11.3932 9.78307 11.4055 9.71655 11.4317C9.65004 11.4579 9.58963 11.4975 9.53908 11.548C9.48853 11.5986 9.44891 11.659 9.42271 11.7255C9.39652 11.792 9.38429 11.8632 9.38679 11.9347C9.3893 12.0061 9.40647 12.0763 9.43725 12.1408C9.46804 12.2053 9.51179 12.2628 9.56575 12.3097C10.3471 13.091 11.4068 13.53 12.5117 13.53C13.6167 13.53 14.6764 13.091 15.4577 12.3097C16.2391 11.5284 16.678 10.4687 16.678 9.3637C16.678 8.25874 16.2391 7.19903 15.4577 6.4177L15.4478 6.4277Z\" fill=\"#686868\"/>
                    <path d=\"M13.2318 5.27771C12.6322 5.16406 12.0149 5.18486 11.4243 5.33862C10.8337 5.49238 10.2846 5.77527 9.81657 6.16688C9.34852 6.5585 8.9732 7.04909 8.71766 7.60328C8.46212 8.15748 8.33274 8.76146 8.33883 9.3717C8.34178 9.61543 8.36653 9.85839 8.41282 10.0977C8.43414 10.2181 8.49708 10.3273 8.59066 10.406C8.68424 10.4848 8.80251 10.5282 8.92483 10.5287C8.95538 10.5287 8.98587 10.5257 9.01583 10.5197C9.15094 10.4953 9.27099 10.4186 9.34998 10.3063C9.42897 10.194 9.46053 10.0551 9.43783 9.91971C9.40276 9.74044 9.38401 9.55835 9.38183 9.3757C9.37625 8.91718 9.47286 8.46319 9.66463 8.04667C9.85641 7.63015 10.1385 7.26157 10.4905 6.96769C10.8425 6.67382 11.2556 6.46202 11.6997 6.34768C12.1437 6.23335 12.6077 6.21935 13.0578 6.3067C13.1269 6.32229 13.1984 6.32371 13.268 6.31085C13.3376 6.29799 13.4039 6.27114 13.4628 6.23192C13.5218 6.19269 13.5721 6.1419 13.6108 6.08264C13.6496 6.02338 13.6758 5.95688 13.6881 5.88716C13.7004 5.81744 13.6984 5.74595 13.6822 5.67703C13.666 5.60811 13.636 5.54319 13.594 5.4862C13.552 5.42922 13.4988 5.38136 13.4378 5.34552C13.3767 5.30968 13.3091 5.28661 13.2388 5.27771H13.2318Z\" fill=\"#686868\"/>
                    <path d=\"M24.8768 9.03571C22.9352 6.84053 20.6269 4.99946 18.0548 3.5947C17.932 3.53131 17.7891 3.5193 17.6574 3.56131C17.5258 3.60332 17.4162 3.6959 17.3528 3.8187C17.2894 3.94149 17.2774 4.08445 17.3194 4.2161C17.3614 4.34775 17.454 4.45732 17.5768 4.52071C19.8918 5.79322 21.9856 7.43208 23.7768 9.3737C22.5358 10.7177 17.6488 15.6237 12.4978 15.6237C10.6796 15.6069 8.88891 15.1774 7.26083 14.3677C7.13808 14.318 7.00099 14.3169 6.87745 14.3646C6.75391 14.4123 6.65318 14.5053 6.59574 14.6246C6.5383 14.744 6.52846 14.8807 6.56823 15.007C6.608 15.1333 6.69438 15.2398 6.80982 15.3047C8.57891 16.1833 10.5246 16.648 12.4998 16.6637C18.9178 16.6637 24.6368 9.9927 24.8758 9.7077C24.9553 9.61383 24.999 9.49487 24.9991 9.37189C24.9993 9.2489 24.956 9.12982 24.8768 9.03571Z\" fill=\"#686868\"/>
                    <path d=\"M15.9167 2.6807C14.8174 2.297 13.663 2.09435 12.4987 2.0807C6.08072 2.0807 0.361723 8.7517 0.122723 9.0367C0.0487375 9.12443 0.00578831 9.23414 0.00054443 9.34878C-0.00469945 9.46342 0.0280554 9.57658 0.0937228 9.6707C1.41521 11.4422 3.0306 12.9741 4.86972 14.1997C4.92672 14.2374 4.99058 14.2635 5.05765 14.2765C5.12473 14.2895 5.19372 14.2892 5.26067 14.2755C5.32762 14.2619 5.39123 14.2352 5.44786 14.1969C5.50449 14.1587 5.55303 14.1097 5.59072 14.0527C5.62841 13.9957 5.65451 13.9318 5.66752 13.8648C5.68053 13.7977 5.6802 13.7287 5.66655 13.6618C5.6529 13.5948 5.62619 13.5312 5.58796 13.4746C5.54973 13.4179 5.50072 13.3694 5.44372 13.3317C3.8339 12.2455 2.39965 10.9195 1.19072 9.3997C2.39072 8.0997 7.30872 3.1217 12.4967 3.1217C13.5487 3.13523 14.5915 3.31894 15.5847 3.6657C15.6493 3.68853 15.7179 3.69817 15.7863 3.69406C15.8547 3.68996 15.9216 3.67219 15.983 3.6418C16.0445 3.61141 16.0992 3.56902 16.144 3.51714C16.1887 3.46525 16.2227 3.40491 16.2437 3.3397C16.2876 3.20907 16.2779 3.06639 16.2168 2.94289C16.1557 2.81938 16.0482 2.72511 15.9177 2.6807H15.9167Z\" fill=\"#686868\"/>
                    <path d=\"M21.7197 0.151703C21.622 0.0545474 21.4899 0 21.3522 0C21.2144 0 21.0823 0.0545474 20.9847 0.151703L3.27567 17.8587C3.18918 17.9582 3.14365 18.0869 3.14827 18.2187C3.15288 18.3504 3.2073 18.4756 3.30054 18.5688C3.39379 18.6621 3.51892 18.7165 3.65071 18.7211C3.7825 18.7257 3.91113 18.6802 4.01067 18.5937L21.7197 0.890701C21.8168 0.793069 21.8714 0.660937 21.8714 0.523201C21.8714 0.385465 21.8168 0.253333 21.7197 0.155701V0.151703Z\" fill=\"#686868\"/>
                    </svg>
                    </button> </span>
                    
            </div>  
            <div class=\"form-group\">
                <label class=\"text-danger\">";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "password", [], "any", false, false, false, 63), "second", [], "any", false, false, false, 63), 'errors');
        echo "</label>
            </div>  
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "\">
            <div class=\"form-group password_groupe\">
                <div class=\"ml-2 mt-3\">
                    ";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("language_preferences"), "html", null, true);
        echo "
                    ";
        // line 69
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "locale", [], "any", false, false, false, 69), "fr"))) {
            // line 70
            echo "                        <a href=\"/admin/fr";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "requestUri", [], "any", false, false, false, 70), 6), "html", null, true);
            echo "\" class=\"lang-switcher btn btn-link\">FR</a>
                    ";
        } else {
            // line 72
            echo "                        <a href=\"/admin";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "request", [], "any", false, false, false, 72), "requestUri", [], "any", false, false, false, 72), 9), "html", null, true);
            echo "\" class=\"lang-switcher btn btn-link\">EN</a>
                    ";
        }
        // line 74
        echo "                </div>
                <center>
                    <button type=\"submit\" class=\"btn btn-primary mt-3\">
                        ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send"), "html", null, true);
        echo "
                    </button>
                </center>
            </div>
            ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        echo "
</div>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/jquery.3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ready.js"), "html", null, true);
        echo "\"></script>

<script>
/**  toggle password */
    let btn = document.getElementById(\"toggle-password\");
    let btnSecond = document.getElementById(\"toggle-password-second\");
    let input = document.getElementById(\"user_reset_password_password_first\");
    let inputSecond = document.getElementById(\"user_reset_password_password_second\");

    if (btn) {
        btn.addEventListener(\"click\", function(e) {
            e.preventDefault();
            togglePassword(input, btn) 
        });
    }
    if (btnSecond) {
        btnSecond.addEventListener(\"click\", function(e) {
            e.preventDefault();
            togglePassword(inputSecond, btnSecond) 
        });
    }

    function togglePassword(input, icon) {
        if ((input.type === \"password\")) {
        input.type = \"text\";
        icon.classList.add(\"visibility\");
        } else {
        input.type = \"password\";
        icon.classList.remove(\"visibility\");
        }
    }

</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "account/reset_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 87,  210 => 86,  206 => 85,  202 => 84,  198 => 83,  193 => 81,  186 => 77,  181 => 74,  175 => 72,  169 => 70,  167 => 69,  163 => 68,  157 => 65,  152 => 63,  136 => 50,  132 => 49,  126 => 46,  111 => 34,  107 => 33,  102 => 31,  97 => 29,  94 => 28,  92 => 27,  85 => 23,  81 => 22,  77 => 21,  67 => 14,  60 => 10,  54 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>{{ 'Reset password'|trans }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel=\"icon\" href=\"{{ asset('assets/img/favicon.ico') }}\" type=\"image/x-icon\"/>

    <!-- Fonts and icons -->
    <script src=\"{{ asset('assets/js/plugin/webfont/webfont.min.js') }}\"></script>
    <script>
        WebFont.load({
            google: {\"families\":[\"Montserrat:100,200,300,400,500,600,700,800,900\"]},
            custom: {\"families\":[\"Flaticon\", \"LineAwesome\"], urls: ['{{ asset('assets/css/fonts.css') }}']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/ready.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/demo.css') }}\">
</head>
<body class=\"login\">
<div class=\"wrapper wrapper-login\">
    {% include 'partial/alert.html.twig' %}
    <div class=\"container container-login animated fadeIn\">
        <h3 class=\"text-center\">{{ 'New password'|trans }}</h3>

        {{ form_start(form)}}
            <div class=\"form-group password_groupe\">
                <label for=\"password\">{{ 'New password'|trans }} <span class=\"required-label\">*</span></label>
                {{ form_widget(form.password.first, { 'attr': { 'class': 'form-control'} }) }}
                <span class=\"toggle-password-icon\"> <button id=\"toggle-password\" class=\"toggle-password\">
                    <svg width=\"25\" height=\"19\" viewBox=\"0 0 25 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M15.4478 6.4277C15.3482 6.3412 15.2196 6.29568 15.0878 6.3003C14.956 6.30492 14.8309 6.35932 14.7376 6.45257C14.6444 6.54581 14.59 6.67095 14.5853 6.80274C14.5807 6.93453 14.6263 7.06316 14.7128 7.1627C15.0306 7.44572 15.2874 7.7907 15.4672 8.17647C15.647 8.56225 15.7461 8.98071 15.7584 9.40615C15.7707 9.83159 15.696 10.2551 15.5389 10.6506C15.3817 11.0462 15.1454 11.4054 14.8444 11.7064C14.5435 12.0073 14.1842 12.2436 13.7886 12.4008C13.3931 12.558 12.9696 12.6327 12.5442 12.6204C12.1187 12.608 11.7003 12.5089 11.3145 12.3291C10.9288 12.1493 10.5838 11.8926 10.3007 11.5747C10.2539 11.5207 10.1964 11.477 10.1318 11.4462C10.0673 11.4154 9.99715 11.3982 9.9257 11.3957C9.85426 11.3932 9.78307 11.4055 9.71655 11.4317C9.65004 11.4579 9.58963 11.4975 9.53908 11.548C9.48853 11.5986 9.44891 11.659 9.42271 11.7255C9.39652 11.792 9.38429 11.8632 9.38679 11.9347C9.3893 12.0061 9.40647 12.0763 9.43725 12.1408C9.46804 12.2053 9.51179 12.2628 9.56575 12.3097C10.3471 13.091 11.4068 13.53 12.5117 13.53C13.6167 13.53 14.6764 13.091 15.4577 12.3097C16.2391 11.5284 16.678 10.4687 16.678 9.3637C16.678 8.25874 16.2391 7.19903 15.4577 6.4177L15.4478 6.4277Z\" fill=\"#686868\"/>
                    <path d=\"M13.2318 5.27771C12.6322 5.16406 12.0149 5.18486 11.4243 5.33862C10.8337 5.49238 10.2846 5.77527 9.81657 6.16688C9.34852 6.5585 8.9732 7.04909 8.71766 7.60328C8.46212 8.15748 8.33274 8.76146 8.33883 9.3717C8.34178 9.61543 8.36653 9.85839 8.41282 10.0977C8.43414 10.2181 8.49708 10.3273 8.59066 10.406C8.68424 10.4848 8.80251 10.5282 8.92483 10.5287C8.95538 10.5287 8.98587 10.5257 9.01583 10.5197C9.15094 10.4953 9.27099 10.4186 9.34998 10.3063C9.42897 10.194 9.46053 10.0551 9.43783 9.91971C9.40276 9.74044 9.38401 9.55835 9.38183 9.3757C9.37625 8.91718 9.47286 8.46319 9.66463 8.04667C9.85641 7.63015 10.1385 7.26157 10.4905 6.96769C10.8425 6.67382 11.2556 6.46202 11.6997 6.34768C12.1437 6.23335 12.6077 6.21935 13.0578 6.3067C13.1269 6.32229 13.1984 6.32371 13.268 6.31085C13.3376 6.29799 13.4039 6.27114 13.4628 6.23192C13.5218 6.19269 13.5721 6.1419 13.6108 6.08264C13.6496 6.02338 13.6758 5.95688 13.6881 5.88716C13.7004 5.81744 13.6984 5.74595 13.6822 5.67703C13.666 5.60811 13.636 5.54319 13.594 5.4862C13.552 5.42922 13.4988 5.38136 13.4378 5.34552C13.3767 5.30968 13.3091 5.28661 13.2388 5.27771H13.2318Z\" fill=\"#686868\"/>
                    <path d=\"M24.8768 9.03571C22.9352 6.84053 20.6269 4.99946 18.0548 3.5947C17.932 3.53131 17.7891 3.5193 17.6574 3.56131C17.5258 3.60332 17.4162 3.6959 17.3528 3.8187C17.2894 3.94149 17.2774 4.08445 17.3194 4.2161C17.3614 4.34775 17.454 4.45732 17.5768 4.52071C19.8918 5.79322 21.9856 7.43208 23.7768 9.3737C22.5358 10.7177 17.6488 15.6237 12.4978 15.6237C10.6796 15.6069 8.88891 15.1774 7.26083 14.3677C7.13808 14.318 7.00099 14.3169 6.87745 14.3646C6.75391 14.4123 6.65318 14.5053 6.59574 14.6246C6.5383 14.744 6.52846 14.8807 6.56823 15.007C6.608 15.1333 6.69438 15.2398 6.80982 15.3047C8.57891 16.1833 10.5246 16.648 12.4998 16.6637C18.9178 16.6637 24.6368 9.9927 24.8758 9.7077C24.9553 9.61383 24.999 9.49487 24.9991 9.37189C24.9993 9.2489 24.956 9.12982 24.8768 9.03571Z\" fill=\"#686868\"/>
                    <path d=\"M15.9167 2.6807C14.8174 2.297 13.663 2.09435 12.4987 2.0807C6.08072 2.0807 0.361723 8.7517 0.122723 9.0367C0.0487375 9.12443 0.00578831 9.23414 0.00054443 9.34878C-0.00469945 9.46342 0.0280554 9.57658 0.0937228 9.6707C1.41521 11.4422 3.0306 12.9741 4.86972 14.1997C4.92672 14.2374 4.99058 14.2635 5.05765 14.2765C5.12473 14.2895 5.19372 14.2892 5.26067 14.2755C5.32762 14.2619 5.39123 14.2352 5.44786 14.1969C5.50449 14.1587 5.55303 14.1097 5.59072 14.0527C5.62841 13.9957 5.65451 13.9318 5.66752 13.8648C5.68053 13.7977 5.6802 13.7287 5.66655 13.6618C5.6529 13.5948 5.62619 13.5312 5.58796 13.4746C5.54973 13.4179 5.50072 13.3694 5.44372 13.3317C3.8339 12.2455 2.39965 10.9195 1.19072 9.3997C2.39072 8.0997 7.30872 3.1217 12.4967 3.1217C13.5487 3.13523 14.5915 3.31894 15.5847 3.6657C15.6493 3.68853 15.7179 3.69817 15.7863 3.69406C15.8547 3.68996 15.9216 3.67219 15.983 3.6418C16.0445 3.61141 16.0992 3.56902 16.144 3.51714C16.1887 3.46525 16.2227 3.40491 16.2437 3.3397C16.2876 3.20907 16.2779 3.06639 16.2168 2.94289C16.1557 2.81938 16.0482 2.72511 15.9177 2.6807H15.9167Z\" fill=\"#686868\"/>
                    <path d=\"M21.7197 0.151703C21.622 0.0545474 21.4899 0 21.3522 0C21.2144 0 21.0823 0.0545474 20.9847 0.151703L3.27567 17.8587C3.18918 17.9582 3.14365 18.0869 3.14827 18.2187C3.15288 18.3504 3.2073 18.4756 3.30054 18.5688C3.39379 18.6621 3.51892 18.7165 3.65071 18.7211C3.7825 18.7257 3.91113 18.6802 4.01067 18.5937L21.7197 0.890701C21.8168 0.793069 21.8714 0.660937 21.8714 0.523201C21.8714 0.385465 21.8168 0.253333 21.7197 0.155701V0.151703Z\" fill=\"#686868\"/>
                    </svg>
                    </button> </span>
            </div> 
            <div class=\"form-group\">
                <label class=\"text-danger\">{{ form_errors(form.password.first) }}</label>
            </div>
            <div class=\"form-group password_groupe\">
                <label for=\"password\">{{ 'Repeat password'|trans }} <span class=\"required-label\">*</span></label>
                {{ form_widget(form.password.second, { 'attr': { 'class': 'form-control'} }) }}
                <span class=\"toggle-password-icon\"> <button id=\"toggle-password-second\" class=\"toggle-password\">
                    <svg width=\"25\" height=\"19\" viewBox=\"0 0 25 19\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M15.4478 6.4277C15.3482 6.3412 15.2196 6.29568 15.0878 6.3003C14.956 6.30492 14.8309 6.35932 14.7376 6.45257C14.6444 6.54581 14.59 6.67095 14.5853 6.80274C14.5807 6.93453 14.6263 7.06316 14.7128 7.1627C15.0306 7.44572 15.2874 7.7907 15.4672 8.17647C15.647 8.56225 15.7461 8.98071 15.7584 9.40615C15.7707 9.83159 15.696 10.2551 15.5389 10.6506C15.3817 11.0462 15.1454 11.4054 14.8444 11.7064C14.5435 12.0073 14.1842 12.2436 13.7886 12.4008C13.3931 12.558 12.9696 12.6327 12.5442 12.6204C12.1187 12.608 11.7003 12.5089 11.3145 12.3291C10.9288 12.1493 10.5838 11.8926 10.3007 11.5747C10.2539 11.5207 10.1964 11.477 10.1318 11.4462C10.0673 11.4154 9.99715 11.3982 9.9257 11.3957C9.85426 11.3932 9.78307 11.4055 9.71655 11.4317C9.65004 11.4579 9.58963 11.4975 9.53908 11.548C9.48853 11.5986 9.44891 11.659 9.42271 11.7255C9.39652 11.792 9.38429 11.8632 9.38679 11.9347C9.3893 12.0061 9.40647 12.0763 9.43725 12.1408C9.46804 12.2053 9.51179 12.2628 9.56575 12.3097C10.3471 13.091 11.4068 13.53 12.5117 13.53C13.6167 13.53 14.6764 13.091 15.4577 12.3097C16.2391 11.5284 16.678 10.4687 16.678 9.3637C16.678 8.25874 16.2391 7.19903 15.4577 6.4177L15.4478 6.4277Z\" fill=\"#686868\"/>
                    <path d=\"M13.2318 5.27771C12.6322 5.16406 12.0149 5.18486 11.4243 5.33862C10.8337 5.49238 10.2846 5.77527 9.81657 6.16688C9.34852 6.5585 8.9732 7.04909 8.71766 7.60328C8.46212 8.15748 8.33274 8.76146 8.33883 9.3717C8.34178 9.61543 8.36653 9.85839 8.41282 10.0977C8.43414 10.2181 8.49708 10.3273 8.59066 10.406C8.68424 10.4848 8.80251 10.5282 8.92483 10.5287C8.95538 10.5287 8.98587 10.5257 9.01583 10.5197C9.15094 10.4953 9.27099 10.4186 9.34998 10.3063C9.42897 10.194 9.46053 10.0551 9.43783 9.91971C9.40276 9.74044 9.38401 9.55835 9.38183 9.3757C9.37625 8.91718 9.47286 8.46319 9.66463 8.04667C9.85641 7.63015 10.1385 7.26157 10.4905 6.96769C10.8425 6.67382 11.2556 6.46202 11.6997 6.34768C12.1437 6.23335 12.6077 6.21935 13.0578 6.3067C13.1269 6.32229 13.1984 6.32371 13.268 6.31085C13.3376 6.29799 13.4039 6.27114 13.4628 6.23192C13.5218 6.19269 13.5721 6.1419 13.6108 6.08264C13.6496 6.02338 13.6758 5.95688 13.6881 5.88716C13.7004 5.81744 13.6984 5.74595 13.6822 5.67703C13.666 5.60811 13.636 5.54319 13.594 5.4862C13.552 5.42922 13.4988 5.38136 13.4378 5.34552C13.3767 5.30968 13.3091 5.28661 13.2388 5.27771H13.2318Z\" fill=\"#686868\"/>
                    <path d=\"M24.8768 9.03571C22.9352 6.84053 20.6269 4.99946 18.0548 3.5947C17.932 3.53131 17.7891 3.5193 17.6574 3.56131C17.5258 3.60332 17.4162 3.6959 17.3528 3.8187C17.2894 3.94149 17.2774 4.08445 17.3194 4.2161C17.3614 4.34775 17.454 4.45732 17.5768 4.52071C19.8918 5.79322 21.9856 7.43208 23.7768 9.3737C22.5358 10.7177 17.6488 15.6237 12.4978 15.6237C10.6796 15.6069 8.88891 15.1774 7.26083 14.3677C7.13808 14.318 7.00099 14.3169 6.87745 14.3646C6.75391 14.4123 6.65318 14.5053 6.59574 14.6246C6.5383 14.744 6.52846 14.8807 6.56823 15.007C6.608 15.1333 6.69438 15.2398 6.80982 15.3047C8.57891 16.1833 10.5246 16.648 12.4998 16.6637C18.9178 16.6637 24.6368 9.9927 24.8758 9.7077C24.9553 9.61383 24.999 9.49487 24.9991 9.37189C24.9993 9.2489 24.956 9.12982 24.8768 9.03571Z\" fill=\"#686868\"/>
                    <path d=\"M15.9167 2.6807C14.8174 2.297 13.663 2.09435 12.4987 2.0807C6.08072 2.0807 0.361723 8.7517 0.122723 9.0367C0.0487375 9.12443 0.00578831 9.23414 0.00054443 9.34878C-0.00469945 9.46342 0.0280554 9.57658 0.0937228 9.6707C1.41521 11.4422 3.0306 12.9741 4.86972 14.1997C4.92672 14.2374 4.99058 14.2635 5.05765 14.2765C5.12473 14.2895 5.19372 14.2892 5.26067 14.2755C5.32762 14.2619 5.39123 14.2352 5.44786 14.1969C5.50449 14.1587 5.55303 14.1097 5.59072 14.0527C5.62841 13.9957 5.65451 13.9318 5.66752 13.8648C5.68053 13.7977 5.6802 13.7287 5.66655 13.6618C5.6529 13.5948 5.62619 13.5312 5.58796 13.4746C5.54973 13.4179 5.50072 13.3694 5.44372 13.3317C3.8339 12.2455 2.39965 10.9195 1.19072 9.3997C2.39072 8.0997 7.30872 3.1217 12.4967 3.1217C13.5487 3.13523 14.5915 3.31894 15.5847 3.6657C15.6493 3.68853 15.7179 3.69817 15.7863 3.69406C15.8547 3.68996 15.9216 3.67219 15.983 3.6418C16.0445 3.61141 16.0992 3.56902 16.144 3.51714C16.1887 3.46525 16.2227 3.40491 16.2437 3.3397C16.2876 3.20907 16.2779 3.06639 16.2168 2.94289C16.1557 2.81938 16.0482 2.72511 15.9177 2.6807H15.9167Z\" fill=\"#686868\"/>
                    <path d=\"M21.7197 0.151703C21.622 0.0545474 21.4899 0 21.3522 0C21.2144 0 21.0823 0.0545474 20.9847 0.151703L3.27567 17.8587C3.18918 17.9582 3.14365 18.0869 3.14827 18.2187C3.15288 18.3504 3.2073 18.4756 3.30054 18.5688C3.39379 18.6621 3.51892 18.7165 3.65071 18.7211C3.7825 18.7257 3.91113 18.6802 4.01067 18.5937L21.7197 0.890701C21.8168 0.793069 21.8714 0.660937 21.8714 0.523201C21.8714 0.385465 21.8168 0.253333 21.7197 0.155701V0.151703Z\" fill=\"#686868\"/>
                    </svg>
                    </button> </span>
                    
            </div>  
            <div class=\"form-group\">
                <label class=\"text-danger\">{{ form_errors(form.password.second) }}</label>
            </div>  
            <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
            <div class=\"form-group password_groupe\">
                <div class=\"ml-2 mt-3\">
                    {{ 'language_preferences'|trans }}
                    {% if app.request.locale != 'fr' %}
                        <a href=\"/admin/fr{{ app.request.requestUri|slice(6) }}\" class=\"lang-switcher btn btn-link\">FR</a>
                    {% else %}
                        <a href=\"/admin{{ app.request.requestUri|slice(9) }}\" class=\"lang-switcher btn btn-link\">EN</a>
                    {% endif %}
                </div>
                <center>
                    <button type=\"submit\" class=\"btn btn-primary mt-3\">
                        {{ 'Send'|trans }}
                    </button>
                </center>
            </div>
            {{ form_end(form) }}
</div>
<script src=\"{{ asset('assets/js/core/jquery.3.2.1.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/core/popper.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/core/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/ready.js') }}\"></script>

<script>
/**  toggle password */
    let btn = document.getElementById(\"toggle-password\");
    let btnSecond = document.getElementById(\"toggle-password-second\");
    let input = document.getElementById(\"user_reset_password_password_first\");
    let inputSecond = document.getElementById(\"user_reset_password_password_second\");

    if (btn) {
        btn.addEventListener(\"click\", function(e) {
            e.preventDefault();
            togglePassword(input, btn) 
        });
    }
    if (btnSecond) {
        btnSecond.addEventListener(\"click\", function(e) {
            e.preventDefault();
            togglePassword(inputSecond, btnSecond) 
        });
    }

    function togglePassword(input, icon) {
        if ((input.type === \"password\")) {
        input.type = \"text\";
        icon.classList.add(\"visibility\");
        } else {
        input.type = \"password\";
        icon.classList.remove(\"visibility\");
        }
    }

</script>
</body>
</html>", "account/reset_password.html.twig", "/Users/amine/Projects/manageTicket/templates/account/reset_password.html.twig");
    }
}
