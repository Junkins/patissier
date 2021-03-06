<?xml version="1.0" encoding="UTF-8"?>
<ruleset>
    <rule ref="rulesets/codesize.xml">
        <exclude name="CyclomaticComplexity" />
        <exclude name="ExcessiveMethodLength" />
        <exclude name="TooManyPublicMethods" />
        <exclude name="TooManyMethods" />
        <exclude name="ExcessiveClassComplexity" />
        <exclude name="NPathComplexity" />
    </rule>
    <rule ref="rulesets/codesize.xml/CyclomaticComplexity">
        <properties>
            <property name="reportLevel" value="15" />
        </properties>
    </rule>
    <rule ref="rulesets/codesize.xml/ExcessiveMethodLength">
        <properties>
            <property name="minimum" value="200" />
            <property name="ignore-whitespace" value="false" />
        </properties>
    </rule>
    <rule ref="rulesets/codesize.xml/TooManyPublicMethods">
        <properties>
            <property name="maxmethods" value="25" />
        </properties>
    </rule>
    <rule ref="rulesets/codesize.xml/TooManyMethods">
        <properties>
            <property name="maxmethods" value="30" />
        </properties>
    </rule>
    <rule ref="rulesets/codesize.xml/ExcessiveClassComplexity">
        <properties>
            <property name="maximum" value="100" />
        </properties>
    </rule>
    <rule ref="rulesets/codesize.xml/NPathComplexity">
        <properties>
            <property name="minimum" value="626" />
        </properties>
    </rule>

    <rule ref="rulesets/design.xml">
        <exclude name="NumberOfChildren" />
        <exclude name="CouplingBetweenObjects" />
    </rule>
    <rule ref="rulesets/design.xml/NumberOfChildren">
        <properties>
            <property name="minimum" value="50" />
        </properties>
    </rule>
    <rule ref="rulesets/design.xml/CouplingBetweenObjects">
        <properties>
            <property name="minimum" value="40" />
        </properties>
    </rule>

    <rule ref="rulesets/naming.xml">
        <exclude name="ShortVariable" />
        <exclude name="ShortMethodName" />
        <exclude name="LongVariable" />
    </rule>
    <rule ref="rulesets/naming.xml/LongVariable">
        <properties>
            <property name="maximum" value="40" />
        </properties>
    </rule>

    <rule ref="rulesets/unusedcode.xml">
        <exclude name="UnusedFormalParameter" />
        <exclude name="UnusedPrivateMethod" />
    </rule>
</ruleset>