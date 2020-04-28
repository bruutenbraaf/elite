(function (blocks, editor, element, components) {

    const el = element.createElement;
    const InnerBlocks = editor.InnerBlocks;
    const { registerBlockType } = blocks;
    const { InspectorControls, withColors, PanelColorSettings, getColorClassName } = editor;
    const { Fragment } = element;
    const { TextControl, ToggleControl, Panel, PanelBody, PanelRow } = components;
    const iconBlock = el('svg', { width: 24, height: 24 },
        el('path',
            {
                d: "M 0.71578,2 C 0.32064,2 0,2.3157307 0,2.7060291 V 21.294175 C 0,21.683751 0.32064,22 0.71578,22 H 23.28422 C 23.67936,21.999999 24,21.68375 24,21.294174 V 5.9812162 2.7060291 C 24,2.3157307 23.67936,2 23.28422,2 Z M 1.43136,3.411854 H 22.56864 V 5.9812162 H 1.43136 Z m 15.96822,0.4609128 c -0.46106,0 -0.83495,0.3687886 -0.83495,0.8235651 0,0.4549561 0.37389,0.8237674 0.83495,0.8237674 0.46124,0 0.83494,-0.3688113 0.83494,-0.8237674 0,-0.4547765 -0.3737,-0.8235651 -0.83494,-0.8235651 z m 2.78339,0 c -0.46124,0 -0.83515,0.3687886 -0.83515,0.8235651 0,0.4549561 0.37391,0.8237674 0.83515,0.8237674 0.46106,0 0.83494,-0.3688113 0.83494,-0.8237674 0,-0.4547765 -0.37388,-0.8235651 -0.83494,-0.8235651 z M 3.65005,3.990507 c -0.39514,0 -0.71557,0.316068 -0.71557,0.7058249 0,0.3899364 0.32043,0.7060281 0.71557,0.7060281 h 8.92617 c 0.39533,0 0.71579,-0.3160917 0.71579,-0.7060281 0,-0.3897569 -0.32046,-0.7058249 -0.71579,-0.7058249 z M 1.43136,7.3930022 H 22.56864 V 20.588214 H 1.43136 Z m 7.89453,1.5110662 c -0.16452,0 -0.32898,0.05577 -0.46246,0.1672098 -0.53833,0.4497184 -4.5418,3.7936988 -5.09862,4.2587688 -0.30157,0.251951 -0.33909,0.697517 -0.0837,0.994982 0.25543,0.297464 0.70697,0.33447 1.00873,0.08252 l 0.0299,-0.02491 v 3.282584 H 3.93296 c -0.39533,0 -0.71579,0.316024 -0.71579,0.705961 0,0.389937 0.32046,0.706028 0.71579,0.706028 h 16.13408 c 0.39533,0 0.71579,-0.316091 0.71579,-0.706028 0,-0.389937 -0.32046,-0.705961 -0.71579,-0.705961 h -1.57797 v -1.656765 h 1.04279 c 0.4801,0 0.82469,-0.458384 0.68462,-0.911716 L 18.45791,9.4042733 c -0.20526,-0.6650049 -1.16379,-0.6650049 -1.36924,0 l -1.75836,5.6924727 c -0.14007,0.453151 0.20415,0.911716 0.68462,0.911716 h 1.04278 v 1.656764 h -3.1256 v -3.282584 l 0.0299,0.02491 c 0.30176,0.251951 0.7533,0.214945 1.00873,-0.08252 0.25543,-0.297465 0.21792,-0.743031 -0.0837,-0.994982 C 14.37068,12.898749 10.59208,9.7426047 9.78843,9.0712782 9.65494,8.9598418 9.49041,8.9040684 9.32589,8.9040684 Z m 0,1.6310446 3.17472,2.651678 v 4.478436 h -0.99242 v -3.38553 c 0,-0.389937 -0.32043,-0.706028 -0.71558,-0.706028 H 7.85924 c -0.39533,0 -0.71572,0.316091 -0.71572,0.706028 v 3.38553 H 6.15103 v -4.478436 h 2.1e-4 z m 8.4474,1.497088 0.79229,2.564476 h -1.58437 z m -9.19848,2.953457 h 1.50202 v 2.679569 H 8.57481 Z"
            }
        )
    );
    const colorSamples = [
        {
            name: 'Blue',
            slug: 'blue',
            color: '#425CC7'
        },
        {
            name: 'White',
            slug: 'white',
            color: '#ffffff'
        }
    ];

    registerBlockType('content/section', {
        title: 'Section',
        icon: iconBlock,
        category: 'layout',
        keywords: ['content', 'block', 'section'],

        attributes: {
            blockColor: {
                type: 'string',
            },
            customBlockColor: {
                type: 'string',
            },
            doubleoptin: {
                type: 'boolean' // for ToggleControl we need boolean type
            },
            paddingBlock: {
                type: 'boolean' // for ToggleControl we need boolean type
            },
            BottomPaddingBlock: {
                type: 'boolean' // for ToggleControl we need boolean type
            }
        },


        edit: withColors('blockColor')(function (props) {

            var blockClasses = ((props.blockColor.class || '') + ' ' + props.className).trim();
            var blockShadow = (props.attributes.doubleoptin == true ? 'addmark' : 'nomark');
            var blockPaddings = (props.attributes.paddingBlock == true ? 'addpadding' : 'nopadding');
            var BottomPaddingBlock = (props.attributes.BottomPaddingBlock == true ? 'b-p' : 'b-n');

            var blockStyles = {
                backgroundColor: props.blockColor.class ? undefined : props.attributes.customBlockColor,
            };

            return (
                el(Fragment, {},

                    el(InspectorControls, {},
                        el(PanelColorSettings,
                            {
                                title: 'Blok kleur',
                                colorSettings: [
                                    {
                                        colors: colorSamples,
                                        value: props.blockColor.color,
                                        label: 'Hoofdkleur',
                                        onChange: props.setBlockColor,
                                    }
                                ]
                            },
                        ),
                        el(PanelBody, { title: 'Section opties', initialOpen: true },
                            el(PanelRow, {},
                                el(ToggleControl,
                                    {
                                        label: 'Voeg wit vlak toe',
                                        onChange: (value) => {
                                            props.setAttributes({ doubleoptin: value });
                                        },
                                        checked: props.attributes.doubleoptin,
                                    }
                                ),
                            ),
                            el(PanelRow, {},
                                el(ToggleControl,
                                    {
                                        label: 'Voeg extra padding rechts',
                                        onChange: (value) => {
                                            props.setAttributes({ paddingBlock: value });
                                        },
                                        checked: props.attributes.paddingBlock,
                                    }
                                ),
                            ),
                            el(PanelRow, {},
                                el(ToggleControl,
                                    {
                                        label: 'Verwijder onderkant padding (Wanneer je kolommen gebruikt)',
                                        onChange: (value) => {
                                            props.setAttributes({ BottomPaddingBlock: value });
                                        },
                                        checked: props.attributes.BottomPaddingBlock,
                                    }
                                ),
                            )
                        )
                    ),

                    el('div', { className: blockClasses + ' ' + blockShadow + ' ' + blockPaddings + ' ' + BottomPaddingBlock, style: blockStyles },
                        el('div', { className: 'blockwrap' },
                            el(InnerBlocks)
                        )
                    )
                )
            );
        }),

        save: function (props) {

            var blockClass = getColorClassName('block-color', props.attributes.blockColor);

            var blockClasses = blockClass;
            var blockShadow = (props.attributes.doubleoptin == true ? 'addmark' : 'nomark');
            var blockPaddings = (props.attributes.paddingBlock == true ? 'addpadding' : 'nopadding');
            var BottomPaddingBlock = (props.attributes.BottomPaddingBlock == true ? 'b-p' : 'b-n');

            var blockStyles = {
                backgroundColor: blockClass ? undefined : props.attributes.customBlockColor,
            };

            return (
                el('div', { className: blockClasses + ' ' + blockShadow + ' ' + blockPaddings + ' ' + BottomPaddingBlock, style: blockStyles },
                    el(InnerBlocks.Content, null)
                )
            );
        },
    });
})(
    window.wp.blocks,
    window.wp.editor,
    window.wp.element,
    window.wp.components,
);